<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorBannerImage extends Model
{
    protected $primaryKey = 'banner_image_id';

    protected $fillable = [
        'banner_image'
    ];
}
