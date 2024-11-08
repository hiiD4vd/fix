<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert([
            [
                'pengguna_id' => 1,  // Sesuaikan dengan id pengguna yang ada
                'metode_pembayaran_id' => 1,  // Sesuaikan dengan id metode pembayaran yang ada
                'produk_id' => 6,  // Sesuaikan dengan id produk yang ada
                'diskon_id' => null,  // Atau sesuaikan dengan id diskon yang ada
                'total' => 24000000.00,  // Total harga
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pengguna_id' => 1,
                'metode_pembayaran_id' => 2,
                'produk_id' => 7,
                'diskon_id' => 1,  // Sesuaikan jika ada diskon
                'total' => 200000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan lebih banyak data sesuai kebutuhan
        ]);
    }
}
