<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Need;
use App\Models\Donation;
use App\Models\Payment;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class DonateForm extends Component
{
    public $needs;
    public $selectedNeeds = [];
    public $showDonationModal = false;
    public $donations = [];

    public function mount()
    {
        $this->loadNeeds();
    }

    public function loadNeeds()
    {
        $this->needs = Need::where('fulfilled', false)->get();
    }

    public function openDonationModal()
    {
        $this->showDonationModal = true;
        $this->donations = collect($this->selectedNeeds)->mapWithKeys(function ($needId) {
            return [$needId => [
                'donation_date' => now()->format('Y-m-d'),
                'quantity' => '',
                'unit' => '',
                'comments' => '',
            ]];
        })->toArray();
    }

    public function closeDonationModal()
    {
        $this->showDonationModal = false;
        $this->reset(['donations']);
    }

    public function makeDonation()
    {
        $this->validate([
            'donations.*.donation_date' => 'required|date',
            'donations.*.quantity' => 'required|numeric|min:1',
            'donations.*.unit' => 'required|string',
        ]);

        foreach ($this->donations as $needId => $donationData) {
            Donation::create([
                'user_id' => auth()->id(),
                'need_id' => $needId,
                'donation_date' => $donationData['donation_date'],
                'quantity' => $donationData['quantity'],
                'unit' => $donationData['unit'],
                'comments' => $donationData['comments'],
                'status' => 'pending',
            ]);
        }

        $this->closeDonationModal();
        $this->reset(['selectedNeeds']);
        session()->flash('message', 'Your donation has been made successfully. Thank you for your generosity!');
    }


    //PAYPAL PAYMENT GATEWAY INTERGRATION
    public function paypal()
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success'),
                "cancel_url" => route('paypal.cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                    //  "value" => $request->amount
                        "value" => "100"
                    ]
                ]
            ]
        ]);
    
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        }
    
        session()->flash('error', 'Something went wrong.');
        return redirect()->route('donate-form');
    }

    public function success(Request $request)
{
    //Handle success logic
    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $provider->setCurrency('USD');
    $paypalToken = $provider->getAccessToken();
    $provider->setAccessToken($paypalToken);

    $orderId = $request->query('token');
    $response = $provider->capturePaymentOrder($orderId);

    if (isset($response['status']) && $response['status'] == 'COMPLETED') {

        //insert data into database
        $data = [
            'user_id' => Auth::id(),
            'payment_id' => $response['id'],
            'payment_amount' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
            'payment_currency' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'],
            'payer_id' => $response['payer']['payer_id'],
            'payer_name' => $response['payer']['name']['given_name'],
            'payer_surname' => $response['payer']['name']['surname'],
            'payer_email' => $response['payer']['email_address'],
            'payment_status' => $response['status'],
            
        ];
        Payment::create($data);
        // Update your donation record as completed
        session()->flash('message', 'Transaction completed successfully!');
    } else {
        session()->flash('error', 'Transaction failed.');
    }

    return redirect()->route('donate-form');
}

    public function cancel()
    {
        // Handle cancel logic 
        session()->flash('error', 'You have canceled the transaction.');
        return redirect()->route('donate-form');
    }

    public function render()
    {
        return view('livewire.donate-form');
    }
}
