<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Get the admin role from the role table. Later(line 33) attach this role to a user */
        $role_admin = Role::where('name', 'admin')->first();

        /* Get the user role from the role table. Later(line 42) attach this role to users */
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Liam Ronan';
        $admin->email = 'liamronan16@gmail.com';
        $admin->password = Hash::make('password');
        $admin->phone_number = "0867132313";
        $admin->save();

        /* Attaching Admin role to User that was created above*/
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = "Jane Doe";
        $user->email = 'jandedoe@gmail.com';
        $user->password = Hash::make('password');
        $user->phone_number = "0853458675";
        $user->save();

        /* Attaching User role to this user */
        $user->roles()->attach($role_user);
    }
}
