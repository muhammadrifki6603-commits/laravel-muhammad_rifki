<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name' => 'Muhammad Rifki',
            'email' => 'muhammadrifki6603@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // 2. Akun User
        User::create([
            'name' => 'User Biasa',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);

        // 3. Data Mahasiswa Awal
        Mahasiswa::create([
            'npm' => '25781015',
            'nama' => 'Muhammad Rifki',
            'jurusan' => 'Ilmu Komputer',
            'angkatan' => '2022',
        ]);

        Mahasiswa::create([
            'npm' => '25781009',
            'nama' => 'haya agniya',
            'jurusan' => 'Informatika',
            'angkatan' => '2022',
        ]);

        Mahasiswa::create([
            'npm' => '25781020S',
            'nama' => 'razzi ',
            'jurusan' => 'Sistem Informasi',
            'angkatan' => '2023',
        ]);
    }
}