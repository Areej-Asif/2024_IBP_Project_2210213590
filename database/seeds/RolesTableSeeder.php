<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Admin',
            ],
            [
                'id'    => 2,
                'title' => 'Department',
            ],
            [
                'id' => 3,
                'title' =>'Students'
            ],
        ];

        Role::insert($roles);
    }
}
