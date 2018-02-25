<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RoleTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UserTableSeeder::class,
            EstablishmentTypeTableSeeder::class,
            OrderStatusesTableSeeder::class,
            ItemTypesTableSeeder::class,
            PaymentMethodTableSeeder::class
        ]);
    }
}
