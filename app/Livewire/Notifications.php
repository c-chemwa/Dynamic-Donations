<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Donation;

class Notifications extends Component
{
    public $limit = 5; // Default limit
    public $notifications = [];

    public function mount($limit = 5)
    {
        $this->limit = $limit;
        $this->fetchNotifications();
    }

    public function fetchNotifications()
    {
        $this->notifications = Donation::where('user_id', auth()->id())
                            ->where('admin_approved', true)
                            ->where('status', 'approved')
                            ->orderBy('created_at', 'desc')
                            ->take($this->limit)
                            ->get();
    }

    public function loadMore()
    {
        $this->limit += 5;
        $this->fetchNotifications();
    }

    public function render()
    {
        return view('livewire.notifications');
    }
}