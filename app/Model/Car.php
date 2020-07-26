<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'vehicle_registration_number', 'brand', 'capacity', 'rental_cost'
    ];
}
