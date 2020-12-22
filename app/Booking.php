<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_email',
        'booking_time',
        'message'
    ];
}
