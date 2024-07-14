<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\VolunteerActivity;
use Carbon\Carbon;

class VolunteerOpportunities extends Component
{
    public $volunteerActivities;

    public function mount()
    {
        $this->volunteerActivities = VolunteerActivity::where('date_time', '>', Carbon::now())
            ->orderBy('date_time', 'asc')
            ->get();
    }

    public function render()
    {
        return view('livewire.volunteering');
    }
}
