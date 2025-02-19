<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder {
    public function run() {
        Karyawan::create([
            'nip' => '1001',
            'nama_lengkap' => 'Admin Kantor',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'jabatan' => '1', // Admin
            'divisi' => 'Manajemen',
            'nik' => '1234567890',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-01-01',
            'tanggal_bergabung' => now(),
            'status' => 'Aktif',
        ]);
    }
}

