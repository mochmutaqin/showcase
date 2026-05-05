<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Showcase;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        Showcase::create([
            'serial_number' => 'HC-001',
            'user_id' => $user->id,
            'warranty_expiry' => '2027-01-01',
            'compressor_type' => 'Inverter',
            'glass_spec' => 'Double Glass',
        ]);
    }
}