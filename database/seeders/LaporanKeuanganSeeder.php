<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanKeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('laporan_keuangan')->insert([
            ['pendapatan_total' => 500000, 'pengeluaran_total' => 200000, 'keuntungan' => 300000, 'kerugian' => 0],
        ]);
    }
}
