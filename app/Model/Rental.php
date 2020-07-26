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
        return $this->belongsTo('App\Customer');
    }

    public function Car()
    {
        return $this->hasOne('App\Car');
    }
}
