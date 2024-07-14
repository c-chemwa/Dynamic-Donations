<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['donation_id', 'receipt_number', 'issue_date', 'details'];
    protected $dates = ['issue_date'];

    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}
