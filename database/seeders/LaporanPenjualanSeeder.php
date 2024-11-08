<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('laporan_penjualan')->insert([
            ['transaksi_id' => 3, 'total_penjualan' => 24000000, 'diskon_id' => null, 'pendapatan_bersih' => 9500000],
            ['transaksi_id' => 4, 'total_penjualan' => 200000, 'diskon_id' => 1, 'pendapatan_bersih' => 9500000],

        ]);
    }
}
