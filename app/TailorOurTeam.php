<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorOurTeam extends Model
{
    protected $primaryKey = 'team_member_id';

    protected $fillable = [
        'photo',
        'designation',
        'name',
        'facebook',
        'instagram',
        'pinterest',
        'linkdin',
        'twitter'
    ];
}
