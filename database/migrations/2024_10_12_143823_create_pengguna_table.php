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
    Schema::create('pengguna', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('email')->unique();
        $table->string('password');
        $table->text('alamat');
        $table->string('nama_toko');
        $table->string('NIK')->unique();
        $table->string('foto')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('pengguna');
}

};
