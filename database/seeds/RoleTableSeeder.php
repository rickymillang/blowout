<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();

        $role->create([
            'name' => 'superadmin',
            'display_name' => 'Super Admin',
            'description' => 'Has superadmin access'
        ]);


        $role->create([
            'name' => 'establishment.admin',
            'display_name' => 'Establishment Admin',
            'description' => 'Can access establishment admin'
        ]);


        $role->create([
            'name' => 'customer',
            'display_name' => 'Customer',
            'description' => 'Can buy or reserve from establishment'
        ]);
    }
}
