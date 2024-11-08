<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('supplier')->insert([
            [
                'nama' => 'Rafi suka makan kepiting', 
                'alamat' => 'Jakarta Utara', 
                'kontak' => '089668559067', 
                'waktu_datang' => '2023-09-20 10:00:00',
                'nama_produk' => 'Hp Iphone',
            ],
            [
                'nama' => 'Mamet daging', 
                'alamat' => 'Pasar Senen', 
                'kontak' => '085770030421', 
                'waktu_datang' => '2023-09-20 10:00:00',
                'nama_produk' => 'Daging Sapi',
            ],
        ]);
    }
}
