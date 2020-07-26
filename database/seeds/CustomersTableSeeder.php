<?php

use App\Model\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Linus Torvald',
            'Bill Gates',
            'Jeff Bezos',
        ];

        $phone_numbers = [
            '+6283199991234',
            '+6283188881234',
            '+6283177771234'
        ];

        $id_cards = [
            '10503333',
            '10502222',
            '10501111',
        ];

        $addresses = [
            'Jl. Sultan Kaharudin',
            'Jl. Baiturrahman',
            'Jl. Arif Rahman Hakim'
        ];

        for ($i=0; $i < 3; $i++) { 
            $customer = new Customer;
            $customer->name = $names[$i];
            $customer->phone_number = $phone_numbers[$i];
            $customer->id_card = $id_cards[$i];
            $customer->address = $addresses[$i];
            $customer->save();
        }


    }
}
