<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
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
