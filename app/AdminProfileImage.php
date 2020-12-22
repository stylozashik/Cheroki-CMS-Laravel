<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminProfileImage extends Model
{
    protected $primaryKey = 'admin_profile_id';

    protected $fillable = [
        'admin_profile_image'
    ];
}
