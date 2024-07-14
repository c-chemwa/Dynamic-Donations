<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Need extends Model
{
    use HasFactory;

    protected $fillable = [
        'need_name',
        'quantity_required',
        'need_type',
        'fulfilled',
    ];

    protected $casts = [
        'fulfilled' => 'boolean',
    ];

    protected $table = 'needs';
    public function scopeUnfulfilled(Builder $query): void
    {
        $query->where('fulfilled', false);
    }
}
