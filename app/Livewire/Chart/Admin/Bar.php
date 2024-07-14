<?php

namespace App\Livewire\Chart\Admin;

use App\Models\Donation;
use Livewire\Component;

class Bar extends Component
{
    public $data;

    public function mount()
    {
        $this->data = $this->getDonationStatusData();
    }
    public function getDonationStatusData()
    {
        // Query the database for donation counts by status
        $pendingCount = Donation::where('status', 'pending')->count();
        $completedCount = Donation::where('status', 'completed')->count();
        $staleCount = Donation::where('status', 'stale')->count();

        // Prepare the data for the chart
        $data = [
            'labels' => ['Pending', 'Completed', 'Stale'],
            'data' => [$pendingCount, $completedCount, $staleCount],
        ];

        return $data;
    }

    public function render()
    {
        return view('livewire.chart.admin.bar', ['data' => $this->data]);
    }
}