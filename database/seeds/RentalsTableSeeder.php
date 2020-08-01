<?php

use App\Model\Rental;
use Illuminate\Database\Seeder;

class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 4; $i++) { 
            $rental = new Rental;
            $rental->car_id = $i;
            $rental->customer_id = $i;
            $rental->duration = $i;
            $rental->total = 300000 * $i;
            $rental->save();
        }
    }
}
