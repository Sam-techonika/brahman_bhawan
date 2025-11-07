<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'room_type',
        'check_in',
        'check_out',
        'guests',
        'special_requests',
        'status'
    ];

    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
    ];
}
