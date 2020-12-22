<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorBannerLogo extends Model
{
    protected $primaryKey = 'banner_logo_id';

    protected $fillable = [
        'banner_logo'
    ];
}
