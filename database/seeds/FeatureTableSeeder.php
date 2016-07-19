<?php

use Cars\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create(['name' => 'dato 1']);
        Feature::create(['name' => 'dato 2']);
        Feature::create(['name' => 'dato 3']);
        Feature::create(['name' => 'dato 4']);
    }
}
