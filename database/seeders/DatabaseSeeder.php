<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'nama' => 'Kang Admin',
            'no_telp' => '08123456789',
            'jenis_kelamin' => 'L',
            'email' => 'admin@ngobarengaidil.com',
            'password' => Hash::make('admin123'),
            'level' => 'admin'
        ]);

        // Admin
        User::create([
            'nama' => 'Aidil Baihaqi',
            'no_telp' => '081268335349',
            'jenis_kelamin' => 'L',
            'email' => 'abaihaqi@ngobarengaidil.com',
            'password' => Hash::make('aidil123'),
            'level' => 'user'
        ]);
    }
}
