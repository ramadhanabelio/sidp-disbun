<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin DISBUN Bengkalis',
            'email' => 'admin@disbun.bengkaliskab.go.id',
            'password' => Hash::make('admin-disbun-1234'),
            'status' => 'super_admin'
        ]);
    }
}
