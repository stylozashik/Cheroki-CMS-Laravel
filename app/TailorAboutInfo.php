<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorAboutInfo extends Model
{
    protected $primaryKey = 'about_info_id';

    protected $fillable = [
        'about_heading',
        'about_description'
    ];
}
