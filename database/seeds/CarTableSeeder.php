<?php

use Cars\Models\Car;
use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
        	'condition' => 'new',
        	'price' => 10000,
        	'iddistrito' => 1,
        	]);
    }
}
