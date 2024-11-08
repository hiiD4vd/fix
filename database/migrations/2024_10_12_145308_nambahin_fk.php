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
        // Tambahkan foreign key tanpa menambah kolom baru
        Schema::table('produk', function (Blueprint $table) {
            $table->foreign('stok_id')->references('id')->on('stok')->onDelete('cascade');
        });

        Schema::table('stok', function (Blueprint $table) {
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->dropForeign(['stok_id']);
        });

        Schema::table('stok', function (Blueprint $table) {
            $table->dropForeign(['produk_id']);
        });
    }
};
