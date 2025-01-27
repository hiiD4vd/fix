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
        Schema::table('supplier', function (Blueprint $table) {
            $table->string('nama_produk')->nullable(); // Tambahkan kolom nama_produk
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('supplier', function (Blueprint $table) {
            $table->dropColumn('nama_produk'); // Hapus kolom jika rollback
        });
    }
};
