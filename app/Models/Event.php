<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'location',
        'status',
        'event_date',
        'details',
        'category',
        'event_time',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];
}
