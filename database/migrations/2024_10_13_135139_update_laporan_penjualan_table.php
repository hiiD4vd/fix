<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('laporan_penjualan', function (Blueprint $table) {
            // Ubah diskon_id menjadi nullable
            $table->foreignId('diskon_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('laporan_penjualan', function (Blueprint $table) {
            // Kembalikan diskon_id menjadi tidak nullable
            $table->foreignId('diskon_id')->nullable(false)->change();
        });
    }
};
