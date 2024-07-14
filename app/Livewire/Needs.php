<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Need;

class Needs extends Component
{
    
    public $needs;
    public function mount()
    {
        $this->loadNeeds();
    }

    public function loadNeeds()
    {
        $this->needs = Need::where('fulfilled', false)->get();
    }
    public function redirectToDonateForm()
    {
        return redirect()->to('/donate-form');
    }

    public function render()
    {
        return view('livewire.needs');
    }
}