<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorServiceInfo extends Model
{
    protected $primaryKey = 'service_id';

    protected $fillable = [
        'service_icon',
        'service_title',
        'service_description',
        'service_time'
    ];
}
