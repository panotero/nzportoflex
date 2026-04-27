<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
    protected $fillable = [
        'user_id',
        'main',
        'sub',
        'cta',
        'background',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
