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
    Schema::create('laporan_penjualan', function (Blueprint $table) {
        $table->id();
        $table->foreignId('transaksi_id')->constrained('transaksi');
        $table->decimal('total_penjualan', 15, 2);
        $table->foreignId('diskon_id')->constrained('diskon');
        $table->decimal('pendapatan_bersih', 15, 2);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('laporan_penjualan');
}

};
