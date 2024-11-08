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
        Schema::table('stok', function (Blueprint $table) {
            // Drop foreign key constraint jika ada
            $table->dropForeign(['produk_id']);
            // Hapus kolom produk_id
            $table->dropColumn('produk_id');
        });
    }

    public function down()
    {
        Schema::table('stok', function (Blueprint $table) {
            // Tambahkan kolom produk_id kembali jika perlu
            $table->unsignedBigInteger('produk_id')->nullable();
            // Tambahkan foreign key constraint jika perlu
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
        });
    }
};
