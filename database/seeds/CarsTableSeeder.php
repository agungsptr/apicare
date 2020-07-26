<?php

use App\Model\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicle_numbers = [
            'DR 0001 AB',
            'DR 0002 BC',
            'DR 0003 DE',
            'DR 0004 EF',
            'DR 0005 GH'
        ];

        $brands = [
            'Nissan',
            'Honda',
            'Mercedes',
            'Toyota',
            'Bmw'
        ];

        $capacitys = [
            4, 4, 4, 6, 6
        ];

        $rental_costs = [
            350000,
            370000,
            500000,
            310000,
            600000
        ];

        for ($i=0; $i < 5; $i++) { 
            $car = new Car;
            $car->vehicle_registration_number = $vehicle_numbers[$i];
            $car->brand = $brands[$i];
            $car->capacity = $capacitys[$i];
            $car->rental_cost = $rental_costs[$i];
            $car->save();
        }
    }
}
