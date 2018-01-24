<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        //this seed create superadmin account
        $user->create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => "images/user/avatar.png"
        ]);

        $super_admin = Role::findOrFail(1);
        $user = User::findOrFail(1);
        $user->attachRole($super_admin);

    }
}
