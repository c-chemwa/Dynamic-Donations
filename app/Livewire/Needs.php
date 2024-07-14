<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Need;

class Needs extends Component
{
    
    public $needs;
    public $search = '';
    public $needType = '';
    public function mount()
    {
        $this->loadNeeds();
    }

    public function loadNeeds()
    {
        $query = Need::where('fulfilled', false);

        if ($this->search) {
            $query->where('need_name', 'like', '%' . $this->search . '%');
        }

        if ($this->needType) {
            $query->where('need_type', $this->needType);
        }

        $this->needs = $query->get();
    }
    public function updatedSearch()
    {
        $this->loadNeeds();
    }

    public function updatedNeedType()
    {
        $this->loadNeeds();
    }
    public function redirectToDonateForm()
    {
        return redirect()->to('/donate-form');
    }

    public function render()
    {
        $needTypes = Need::distinct('need_type')->pluck('need_type');

        return view('livewire.needs', [
            'needs' => $this->needs,
            'headers' => [
                ['key' => 'id', 'label' => '#'],
                ['key' => 'need_name', 'label' => 'Need Name'],
                ['key' => 'quantity_required', 'label' => 'Quantity Required'],
                ['key' => 'unit', 'label' => 'Unit'],
                ['key' => 'need_type', 'label' => 'Need Category'],
            ],
            'needTypes' => $needTypes,
        ]);
    }
}