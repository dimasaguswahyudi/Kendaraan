<?php

namespace Database\Seeders;

use App\Models\Stok;
use Illuminate\Database\Seeder;
use Database\Seeders\KendaraanSeeder;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kendaraanSeeder = new KendaraanSeeder();

        foreach ($kendaraanSeeder->kendaraan as $key => $value) {
            Stok::create([
                'kendaraan_id' => $value->id,
                'jumlah' => rand(100,1000),
            ]);
        }
    }
}
