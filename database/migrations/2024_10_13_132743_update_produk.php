<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            // Menambahkan kolom nama_kategori
            $table->string('nama_kategori')->nullable();

            // Menambahkan foreign key yang mengacu ke kolom nama_kategori di tabel kategori
            $table->foreign('nama_kategori')->references('nama_kategori')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            // Menghapus foreign key
            $table->dropForeign(['nama_kategori']);
            
            // Menghapus kolom nama_kategori
            $table->dropColumn('nama_kategori');
        });
    }
};
