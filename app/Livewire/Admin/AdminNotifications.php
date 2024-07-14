<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Donation;


class AdminNotifications extends Component
{
    public $unseenDonations;
    public $limit = 5;

    public function mount()
    {
        $this->loadUnseenDonations();
    }

    public function loadUnseenDonations()
    {
        $this->unseenDonations = Donation::where('admin_seen', false)
            ->orderBy('created_at', 'desc')
            ->limit($this->limit)
            ->get();
    }

    public function markAsSeen($donationId)
    {
        $donation = Donation::findOrFail($donationId);
        $donation->update(['admin_seen' => true]);
        $this->loadUnseenDonations();
    }

    public function loadMore()
    {
        $this->limit += 5;
        $this->loadUnseenDonations();
    }

    public function render()
    {
        return view('livewire.admin.admin-notifications');
    }
}
