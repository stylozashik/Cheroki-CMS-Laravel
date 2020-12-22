<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $primaryKey = 'testimonial_id';

    protected $fillable = [
        'customer_name',
        'testimonial_details',
    ];
}
