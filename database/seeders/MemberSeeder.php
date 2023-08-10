<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'first_name' => 'Kidus',
            'father_name' => 'taye',
            'last_name' => 'Tsige',
            'title' => 'Mr.',
            'gender' => 'male',
            'dob' => '1996-01-01 00:00:00',
            'martial_status' => 'single',
            'family_no' => 5,
            'family_males' => 3,
            'family_females' => 2,
            'phone_no' => '0913974307',
            'email' => 'john@email.com',
            'will_list' => 'relative one, relative two',
            'password' => Hash::make('password')
        ]);
    }
}
