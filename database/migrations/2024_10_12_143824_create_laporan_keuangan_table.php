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
    Schema::create('laporan_keuangan', function (Blueprint $table) {
        $table->id();
        $table->decimal('pendapatan_total', 15, 2);
        $table->decimal('pengeluaran_total', 15, 2);
        $table->decimal('keuntungan', 15, 2);
        $table->decimal('kerugian', 15, 2);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('laporan_keuangan');
}

};
