<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorTestimonial extends Model
{
    protected $primaryKey = 'testimonial_id';

    protected $fillable = [
        'customer_name',
        'testimonial_details',
    ];
}
