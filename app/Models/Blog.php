<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'photo_path',
        'user_id',
    ];
    protected $dates = ['deleted_at']; // For SoftDeletes

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
