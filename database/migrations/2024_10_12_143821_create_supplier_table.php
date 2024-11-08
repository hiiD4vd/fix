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
        Schema::create('supplier', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat');
            $table->string('kontak');
            $table->foreignId('produk_id')->constrained('produk');
            $table->timestamp('waktu_datang')->useCurrent();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('supplier');
    }
    
    
};
