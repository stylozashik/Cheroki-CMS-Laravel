<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutInfo extends Model
{
    protected $primaryKey = 'about_info_id';

    protected $fillable = [
        'about_info_heading',
        'about_info_description'
    ];
}
