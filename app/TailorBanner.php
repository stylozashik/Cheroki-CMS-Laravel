<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorBanner extends Model
{
    protected $primaryKey = 'banner_id';

    protected $fillable = [
        'logo_title',
        'big_title_up',
        'big_title_down',
        'open_time',
        'our_location',
        'booking_contact',
    ];
}
