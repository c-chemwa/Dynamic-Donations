<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Donation;
use App\Models\Receipt;
use Barryvdh\DomPDF\Facade\Pdf;

class GenerateReceipt extends Component
{
    public $donationId;
    public $receipt;

    public function mount($donationId)
    {
        $this->donationId = $donationId;
        $this->loadReceipt();
    }

    public function loadReceipt()
    {
        $this->receipt = Receipt::where('donation_id', $this->donationId)->first();
        if (!$this->receipt) {
            $this->generateReceipt();
        }
    }

    public function generateReceipt()
    {
        $donation = Donation::findOrFail($this->donationId);
        
        $this->receipt = Receipt::create([
            'donation_id' => $donation->id,
            'receipt_number' => 'RCP-' . uniqid(),
            'issue_date' => now(),
            'details' => json_encode([
                'donor_name' => $donation->user->name,
                'donation_date' => $donation->donation_date,
                'need_name' => $donation->need->need_name,
                'quantity' => $donation->quantity,
                'unit' => $donation->unit,
            ]),
        ]);
    }

    public function downloadPdf()
    {
        $pdf = Pdf::loadView('livewire.receipt-pdf', ['receipt' => $this->receipt]);
        return response()->streamDownload(function() use ($pdf) {
            echo $pdf->output();
        }, 'receipt-' . $this->receipt->receipt_number . '.pdf');
    }

    public function render()
    {
        return view('livewire.generate-receipt');
    }
}