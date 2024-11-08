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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengguna_id')->constrained('pengguna');
            $table->foreignId('metode_pembayaran_id')->constrained('metode_pembayaran');
            $table->foreignId('produk_id')->constrained('produk'); // Produk yang dibeli
            $table->foreignId('diskon_id')->nullable()->constrained('diskon'); // Diskon yang diterapkan
            $table->decimal('total', 15, 2); // Total transaksi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
