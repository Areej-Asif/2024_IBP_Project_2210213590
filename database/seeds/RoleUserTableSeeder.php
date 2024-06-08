<?php

use App\User;
use App\Role;
use App\Permission;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::where('title', 'Admin')->first();
        $department = Role::where('title', 'Department')->first();
        $student = Role::where('title', 'Students')->first();
        $admin->permissions()->sync(Permission::all());
        $student->permissions()->sync(Permission::whereIn('title', [
            'ticket_create', 'ticket_edit', 'ticket_show', 'ticket_delete', 'ticket_access'
        ])->get());

        $admin->users()->sync(User::find(1));
        $student->users()->sync(User::find(2));

    }
}
