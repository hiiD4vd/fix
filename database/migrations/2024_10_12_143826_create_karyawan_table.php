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
    Schema::create('karyawan', function (Blueprint $table) {
        $table->string('NIK')->primary();
        $table->string('nama');
        $table->text('alamat');
        $table->string('jenis_kelamin');
        $table->string('foto')->nullable();
        $table->string('role');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('karyawan');
}

};
