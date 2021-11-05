<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'firstName' => 'Imam Syahru',
                'lastName' => 'Ramadhana',
                'username' => 'KoalaCoder',
                'address' => 'Duren Sawit',
                'birthPlace' => 'DKI Jakarta',
                'birthDate' => date_format(date_create("19-05-1995"), "Y/m/d"),
                'email' => 'koalacoder@rocketmail.com',
                'password' => md5('vessa007')
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
