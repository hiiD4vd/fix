<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pengguna')->insert([
            [
                'nama' => 'Peter Parker',
                'email' => 'spiderman@example.com',
                'password' => bcrypt('spider12345'), // Pastikan password di-hash
                'alamat' => 'New York',
                'nama_toko' => 'Toko benang',
                'NIK' => '1234567890123456',
                'foto' => null
            ],
        ]);
    }
}
