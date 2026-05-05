<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Showcase;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Klien A
        $klienA = User::create([
            'name' => 'Klien A',
            'email' => 'kliena@example.com',
            'password' => bcrypt('password'),
            'role' => 'client',
        ]);

        // Klien B
        $klienB = User::create([
            'name' => 'Klien B',
            'email' => 'klienb@example.com',
            'password' => bcrypt('password'),
            'role' => 'client',
        ]);

        // Showcase milik Klien A
        Showcase::create([
            'serial_number' => 'HC-001',
            'user_id' => $klienA->id,
            'warranty_expiry' => '2027-01-01',
            'compressor_type' => 'Inverter',
            'glass_spec' => 'Double Glass',
        ]);

        // Showcase milik Klien B
        Showcase::create([
            'serial_number' => 'HC-002',
            'user_id' => $klienB->id,
            'warranty_expiry' => '2026-12-01',
            'compressor_type' => 'Non-Inverter',
            'glass_spec' => 'Single Glass',
        ]);
    }
}