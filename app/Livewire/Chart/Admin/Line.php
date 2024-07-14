<?php

namespace App\Livewire\Chart\Admin;

use Livewire\Component;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class Line extends Component
{
    public $summaryData;
    public $payments;

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        // Summary data
        $this->summaryData = [
            'total' => Payment::sum('payment_amount'),
            'average' => Payment::avg('payment_amount'),
            'highest' => Payment::max('payment_amount'),
            'count' => Payment::count(),
        ];

        // Recent payments for the table
        $this->payments = Payment::orderBy('created_at', 'desc')
                                 ->take(10)
                                 ->get();
    }

    public function render()
    {
        return view('livewire.chart.admin.line');
    }
}