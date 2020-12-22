<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorAboutImage extends Model
{
    protected $primaryKey = 'about_image';

    protected $fillable = [
        'about_image_id',
        'about_image'
    ];
}
