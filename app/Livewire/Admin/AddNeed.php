<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Need;
use Mary\Traits\Toast;

class AddNeed extends Component
{
    use Toast;
    public $needName;
    public $quantityRequired;
    public $unit;
    public $needType;
    public $fulfilled;


    public function save(){
        $this->validate(
            [
                'needName' => 'required',
                'quantityRequired' => 'required',
                'unit' => 'required',
                'needType' => 'required',
                'fulfilled' => 'required',
            ]
        );

        Need::create([
            'need_name' => $this->needName,
            'quantity_required' => $this->quantityRequired,
            'unit' => $this->unit,
            'need_type' => $this->needType,
            'fulfilled' => $this->fulfilled,
        ]);

        $need = new Need();
        $need->need_name = $this->needName;
        $need->quantity_required = $this->quantityRequired;
        $need->unit = $this->unit;
        $need->need_type = $this->needType;
        $need->fulfilled = $this->fulfilled;
        $need->save();
        $this->success('Need added successfully',);
        $this->needName = '';
        $this->quantityRequired = '';
        $this->unit = '';
        $this->needType = '';
        $this->fulfilled = '';
    }
    public function render()
    {
        return view('livewire.admin.add-need');
    }
}
