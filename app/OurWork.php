<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurWork extends Model
{
    protected $primaryKey = 'our_works_id';

    protected $fillable = [
        'our_works_image',
        'our_works_title'
    ];
}
