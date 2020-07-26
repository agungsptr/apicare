<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Agung Eka Saputra',
            'Gilang Restu Alam',
            'L Yuda Rahmani Karnaen',
            'Farasut Widodo Malik',
            'Iling Abi Wiraguna'
        ];

        $emails = [
            'agung.eka1999@gmail.com',
            'gilang.alam@gmail.com',
            'yuda.karnaen@gmail.com',
            'dodo.malik@gmail.com',
            'iling.abi@gmail.com'
        ];

        $passwords = [
            'agungsptr',
            'gilangalm',
            'yudakrn',
            'dodomlk',
            'ilingabi'
        ];

        for ($i = 0; $i < 5; $i++) {
            $user = new User;
            $user->name = $names[$i];
            $user->email = $emails[$i];
            $user->password = Hash::make($passwords[$i]);
            $user->save();
        }
    }
}
