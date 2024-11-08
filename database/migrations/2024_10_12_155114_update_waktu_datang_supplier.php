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
            $table->date('waktu_datang')->change(); // Mengubah kolom jadi `date`, bisa juga 'datetime' jika butuh jam
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('supplier', function (Blueprint $table) {
            $table->timestamp('waktu_datang')->useCurrent()->change(); // Kembali ke `timestamp` jika dibatalkan
        });
    }
};
