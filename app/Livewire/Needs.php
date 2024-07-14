<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Need;
use App\Models\Donation;

class Needs extends Component
{
    public function render()
    {
        return view('livewire.needs');
    }
}