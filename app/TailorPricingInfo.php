<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorPricingInfo extends Model
{
    protected $primaryKey = 'pricing_info_id';

    protected $fillable = [
        'pricing_title',
        'price'
    ];
}
