<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('metode_pembayaran')->insert([
            ['nama_metode' => 'Cash'],
            ['nama_metode' => 'Transfer Bank'],
            ['nama_metode' => 'E-Wallet'],
        ]);
    }
}
