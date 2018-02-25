<?php

use App\ItemType;
use Illuminate\Database\Seeder;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemType::create([
    		'name' => 'Product'
    	]);

    	ItemType::create([
    		'name' => 'Service'
    	]);

    	ItemType::create([
    		'name' => 'Package'
    	]);
    }
}
