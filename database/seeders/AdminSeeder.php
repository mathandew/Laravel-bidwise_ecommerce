<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $usersArray = [
        //     [
        //         'name' => "Bid",
        //         'last_name' => "Wise",
        //         'phone_no' => "12345",
        //         'email' => "admin123@gmail.com",
        //         "password" => "12341234",
        //         "role"=>0,
        //     ]
        // ];

        User::truncate();
        foreach ($usersArray as $value) {
            $user = new User($value);
            $user->save();
        }
    }
}
