<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiskonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('diskon')->insert([
            ['jangka_waktu_diskon' => 30, 'jumlah_diskon' => 10.00, 'tema_diskon' => 'Hari Raya'],
            ['jangka_waktu_diskon' => 60, 'jumlah_diskon' => 90.00, 'tema_diskon' => 'Sedekah']
        ]);
        
        
    }
}
