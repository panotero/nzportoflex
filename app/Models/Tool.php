<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = [
        'logo',
        'user_id',
        'title',
        'description',
        'years_experience',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
