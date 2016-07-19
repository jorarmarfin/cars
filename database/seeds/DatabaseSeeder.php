<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        // $this->call(RegionTableSeeder::class);
        // $this->call(ProvinciaTableSeeder::class);
        // $this->call(DistritoTableSeeder::class);
        $this->call(CarTableSeeder::class);
        $this->call(FeatureTableSeeder::class);


        Model::reguard();
    }
}
