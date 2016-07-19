<?php

use Cars\Models\Region;
use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create(['codigo' => '010000','nombre' => 'AMAZONAS', 'descripcion' => 'AMAZONAS']);
		Region::create(['codigo' => '020000','nombre' => 'ANCASH', 'descripcion' => 'ANCASH']);
		Region::create(['codigo' => '030000','nombre' => 'APURIMAC', 'descripcion' => 'APURIMAC']);
		Region::create(['codigo' => '040000','nombre' => 'AREQUIPA', 'descripcion' => 'AREQUIPA']);
		Region::create(['codigo' => '050000','nombre' => 'AYACUCHO', 'descripcion' => 'AYACUCHO']);
		Region::create(['codigo' => '060000','nombre' => 'CAJAMARCA', 'descripcion' => 'CAJAMARCA']);
		Region::create(['codigo' => '070000','nombre' => 'CUSCO', 'descripcion' => 'CUSCO']);
		Region::create(['codigo' => '080000','nombre' => 'HUANCAVELICA', 'descripcion' => 'HUANCAVELICA']);
		Region::create(['codigo' => '090000','nombre' => 'HUANUCO', 'descripcion' => 'HUANUCO']);
		Region::create(['codigo' => '100000','nombre' => 'ICA', 'descripcion' => 'ICA']);
		Region::create(['codigo' => '110000','nombre' => 'JUNIN', 'descripcion' => 'JUNIN']);
		Region::create(['codigo' => '120000','nombre' => 'LA LIBERTAD', 'descripcion' => 'LA LIBERTAD']);
		Region::create(['codigo' => '130000','nombre' => 'LAMBAYEQUE', 'descripcion' => 'LAMBAYEQUE']);
		Region::create(['codigo' => '140000','nombre' => 'LIMA', 'descripcion' => 'LIMA']);
		Region::create(['codigo' => '150000','nombre' => 'LORETO', 'descripcion' => 'LORETO']);
		Region::create(['codigo' => '160000','nombre' => 'MADRE DE DIOS', 'descripcion' => 'MADRE DE DIOS']);
		Region::create(['codigo' => '170000','nombre' => 'MOQUEGUA', 'descripcion' => 'MOQUEGUA']);
		Region::create(['codigo' => '180000','nombre' => 'PASCO', 'descripcion' => 'PASCO']);
		Region::create(['codigo' => '190000','nombre' => 'PIURA', 'descripcion' => 'PIURA']);
		Region::create(['codigo' => '200000','nombre' => 'PUNO', 'descripcion' => 'PUNO']);
		Region::create(['codigo' => '210000','nombre' => 'SAN MARTIN', 'descripcion' => 'SAN MARTIN']);
		Region::create(['codigo' => '220000','nombre' => 'TACNA', 'descripcion' => 'TACNA']);
		Region::create(['codigo' => '230000','nombre' => 'TUMBES', 'descripcion' => 'TUMBES']);
		Region::create(['codigo' => '240000','nombre' => 'CALLAO', 'descripcion' => 'CALLAO']);
		Region::create(['codigo' => '250000','nombre' => 'UCAYALI', 'descripcion' => 'UCAYALI']);

    }
}
