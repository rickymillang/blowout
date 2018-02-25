<?php

use App\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderStatus::create([
    		'name' => 'Approved'
    	]);

    	OrderStatus::create([
    		'name' => 'Canceled'
    	]);

    	OrderStatus::create([
    		'name' => 'Completed'
    	]);

    	OrderStatus::create([
    		'name' => 'Declined'
    	]);

    	OrderStatus::create([
    		'name' => 'On-Delivery'
    	]);

    	OrderStatus::create([
    		'name' => 'Re-scheduled'
    	]);

    	OrderStatus::create([
    		'name' => 'Pending'
    	]);
    }
}
