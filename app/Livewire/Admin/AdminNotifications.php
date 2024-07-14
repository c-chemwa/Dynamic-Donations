<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Donation;
use Carbon\Carbon;


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

        $this->checkForStaleDonations();
    }
    public function checkForStaleDonations()
    {
        $staleDonations = Donation::where('status', 'pending')
            ->where('created_at', '<=', Carbon::now()->subDays(10))
            ->get();

        foreach ($staleDonations as $donation) {
            $this->unseenDonations->prepend($donation);
        }
    }

    public function markAsStale($donationId)
    {
        $donation = Donation::findOrFail($donationId);
        $donation->update(['status' => 'stale']);
        $this->loadUnseenDonations();
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
