<?php

namespace App\Observers;

use App\Models\Donation;
use App\Models\Need;

class DonationObserver
{
    public function created(Donation $donation)
    {
        $this->checkNeedFulfillment($donation);
    }

    public function updated(Donation $donation)
    {
        $this->checkNeedFulfillment($donation);
    }

    private function checkNeedFulfillment(Donation $donation)
    {
        $need = Need::find($donation->need_id);
        
        $totalDonated = Donation::where('need_id', $need->id)
            ->where('status', 'completed')
            ->sum('quantity');

        if ($totalDonated >= $need->quantity_required) {
            $need->update(['fulfilled' => true]);
        }
    }
}