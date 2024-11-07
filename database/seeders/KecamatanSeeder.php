<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kecamatans = [
            ['name' => 'Bengkalis', 'kabupaten_id' => 1],
            ['name' => 'Bantan', 'kabupaten_id' => 1],
            ['name' => 'Bukit Batu', 'kabupaten_id' => 1],
            ['name' => 'Mandau', 'kabupaten_id' => 1],
            ['name' => 'Rupat', 'kabupaten_id' => 1],
            ['name' => 'Rupat Utara', 'kabupaten_id' => 1],
            ['name' => 'Siak Kecil', 'kabupaten_id' => 1],
            ['name' => 'Pinggir', 'kabupaten_id' => 1],
            ['name' => 'Bandar Laksamana', 'kabupaten_id' => 1],
            ['name' => 'Talang Muandau', 'kabupaten_id' => 1],
            ['name' => 'Bathin Solapan', 'kabupaten_id' => 1],
        ];

        foreach ($kecamatans as $kecamatan) {
            Kecamatan::create($kecamatan);
        }
    }
}
