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
        return view('livewire.needs', [
            'needs' => $this->needs,
            'headers' => [
                ['key' => 'id', 'label' => '#'],
                ['key' => 'need_name', 'label' => 'Need Name'],
                ['key' => 'quantity_required', 'label' => 'Quantity Required'],
                ['key' => 'unit', 'label' => 'Unit'],
                ['key' => 'need_type', 'label' => 'Need Category'],
            ],
        ]);
    }
}