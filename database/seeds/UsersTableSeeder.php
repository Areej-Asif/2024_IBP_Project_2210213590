<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'registration_no' => 'CS-1234',
            ],
            [
                'id'             => 2,
                'name'           => 'Saad',
                'email'          => 'saad@gmail.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'registration_no' =>'CS-1235'
            ],
        ];

        User::insert($users);
    }
}
