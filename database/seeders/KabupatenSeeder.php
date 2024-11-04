<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kabupaten::create([
            'name' => 'Bengkalis',
        ]);
    }
}
