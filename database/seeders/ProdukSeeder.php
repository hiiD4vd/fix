<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        DB::table('produk')->insert([
            ['nama' => 'Iphone 16 Pro Max', 'harga' => 24000000, 'nama_kategori' => 'Elektronik', 'stok_id' => 4],
            ['nama' => 'Hoodie Boxy 330 gsm', 'harga' => 200000, 'nama_kategori' => 'Pakaian', 'stok_id' => 5],
        ]);
    }
}
