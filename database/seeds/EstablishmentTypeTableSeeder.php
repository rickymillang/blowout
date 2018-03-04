<?php

use App\EstablishmentType;
use Illuminate\Database\Seeder;

class EstablishmentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	EstablishmentType::create([
    		'name' => 'Catering'
    	]);

    	EstablishmentType::create([
    		'name' => 'Lechon'
    	]);

    	EstablishmentType::create([
    		'name' => 'Party Needs'
    	]);

    	EstablishmentType::create([
    		'name' => 'Cake'
    	]);

        EstablishmentType::create([
            'name' => 'Entertainer'
        ]);

        EstablishmentType::create([
            'name' => 'Event Planner'
        ]);
    }
}
