<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorAdminProfile extends Model
{
    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'admin_email',
        'admin_password',
        'admin_name'
    ];
}
