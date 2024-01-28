<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' => 'admin',
                'password' => bcrypt(123456),
                'email' => 'admin@admin',
                'nama_lengkap' => 'admin perpustakaan',
                'alamat' => 'ponorogo',
                'role' => 'admin'
            ],
            [
                'username' => 'petugas',
                'password' => bcrypt(123456),
                'email' => 'petugas@petugas',
                'nama_lengkap' => 'petugas perpustakaan',
                'alamat' => 'ponorogo',
                'role' => 'petugas'
            ],
            [
                'username' => 'testpeminjam',
                'password' => bcrypt(123456),
                'email' => 'peminjam@peminjam',
                'nama_lengkap' => 'peminjam perpustakaan',
                'alamat' => 'ponorogo',
                'role' => 'peminjam'
            ],
        ];
        foreach ($userData as $key => $val) {
            user::create($val);
        }
    }
}
