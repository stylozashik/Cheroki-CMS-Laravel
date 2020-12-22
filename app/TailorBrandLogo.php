<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorBrandLogo extends Model
{
    protected $primaryKey = 'logo_id';

    protected $fillable = [
        'brand_logo'
    ];
}
