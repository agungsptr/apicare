<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'car_id', 'customer_id', 'duration', 'total'
    ];

    public function Customer()
    {
        return Customer::find($this->customer_id);
    }

    public function Car()
    {
        return Car::find($this->car_id);
    }
}
