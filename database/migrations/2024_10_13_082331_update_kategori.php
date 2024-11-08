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
        // Perbarui tabel kategori dengan membuat kolom nama_kategori menjadi unique
        Schema::table('kategori', function (Blueprint $table) {
            $table->string('nama_kategori')->unique()->change(); // Menambahkan unique constraint
        });
    }

    public function down()
    {
        Schema::table('kategori', function (Blueprint $table) {
            $table->dropUnique(['nama_kategori']); // Menghapus unique constraint jika rollback
        });
    }
};
