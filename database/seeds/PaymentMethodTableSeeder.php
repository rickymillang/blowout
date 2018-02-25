<?php

use App\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
    		'name' => 'Cash On Delivery'
    	]);

    	PaymentMethod::create([
    		'name' => 'PayPal'
    	]);
    }
}
