<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => "john",
            'father_name' => "doe",
            'last_name' => "smith",
            'email' => "john@gmail.com",
            'password' => Hash::make("123456"),
            'phone_no' => "0911121314",
            'avatar' => "/images/default.jpg",
            'user_role' => 'admin'
        ]);

        User::create([
            'first_name' => "Jean",
            'father_name' => "doe",
            'last_name' => "smith",
            'email' => "jean@gmail.com",
            'password' => Hash::make("test"),
            'phone_no' => "0910111213",
            'avatar' => "/images/image.jpg",
            'user_role' => 'admin'
        ]);
    }
}
