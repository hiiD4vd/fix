<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('karyawan')->insert([
            ['NIK' => '362358302119', 'nama' => 'Ahmed majemuk', 'alamat' => 'Rogojampi sonoan dikit', 'jenis_kelamin' => 'L', 'foto' => null, 'role' => 'Kasir'],
        ]);
    }
}
