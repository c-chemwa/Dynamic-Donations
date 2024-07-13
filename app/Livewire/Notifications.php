<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;
use App\Models\Donation;

class Notifications extends Component
{public $notifications = [];

    public function mount()
    {
        $this->fetchNotifications();
    }

    public function fetchNotifications()
    {
        $this->notifications = Donation::where('user_id', Auth::id())
                            ->where('admin_approved', true)
                            ->where('status', 'approved')
                            ->orderBy('created_at', 'desc')
                            ->get();
    }

    public function render()
    {
        return view('livewire.notifications', ['notifications' => $this->notifications]);
    }
}
