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
        Schema::create('stok', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id')->nullable();
            $table->integer('stok');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('stok');
    }
    
};
