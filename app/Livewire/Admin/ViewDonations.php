<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Donation;
use Mary\Traits\Toast;
use Livewire\WithPagination;

class ViewDonations extends Component
{
    use WithPagination;
    use Toast;

    public $donationId;
    public $userName;
    public $needName;
    public $donationDate;
    public $quantity;
    public $unit;
    public $status;
    public $receiptSent;
    public $comments;
    public $adminApproved;
    public $tab = 'all';
    public bool $showEditModal = false;

    protected $rules = [
        'donationDate' => 'required|date',
        'quantity' => 'required|integer',
        'unit' => 'required|string|max:50',
        'status' => 'required|string|max:20',
        'receiptSent' => 'required|boolean',
        'comments' => 'nullable|string',
        'adminApproved' => 'required|boolean',
    ];

    public function delete($id)
    {
        Donation::destroy($id);
        $this->success('Donation deleted successfully');
    }

    public function edit($id)
    {
        $donation = Donation::findOrFail($id);

        $this->donationId = $donation->id;
        $this->userName = $donation->user->name;
        $this->needName = $donation->need->need_name;
        $this->donationDate = $donation->donation_date;
        $this->quantity = $donation->quantity;
        $this->unit = $donation->unit;
        $this->status = $donation->status;
        $this->receiptSent = $donation->receipt_sent;
        $this->comments = $donation->comments;
        $this->adminApproved = $donation->admin_approved;

        $this->showEditModal = true;
    }

    public function update()
    {
    $this->validate();

    $donation = Donation::findOrFail($this->donationId);

    $donation->donation_date = $this->donationDate;
    $donation->quantity = $this->quantity;
    $donation->unit = $this->unit;
    $donation->receipt_sent = $this->receiptSent;
    $donation->comments = $this->comments;
    $donation->admin_approved = $this->adminApproved;

    // Change status to completed if admin approved
    if ($this->adminApproved) {
        $donation->status = 'completed';
    } else {
        $donation->status = $this->status;
    }

    $donation->save();

    $this->success('Donation updated successfully');
    $this->showEditModal = false;
    }

    public function approve($id)
    {
    $donation = Donation::findOrFail($id);
    $donation->admin_approved = true;
    $donation->status = 'completed';  // Change status to completed
    $donation->save();

    $this->success('Donation approved and marked as completed successfully');
    }

    public function closeModal()
    {
        $this->showEditModal = false;
    }
    public function setTab($tabName)
    {
        $this->tab = $tabName;
    }
    public function render()
    {
        $query = Donation::with(['user', 'need']);

        if ($this->tab === 'stale') {
            $query->stale();
        }

        $donations = $query->paginate(10);

        return view('livewire.admin.view-donations', compact('donations'));
    }

}
