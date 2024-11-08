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
        Schema::create('diskon', function (Blueprint $table) {
            $table->id();
            $table->decimal('jumlah_diskon', 5, 2);
            $table->integer('jangka_waktu_diskon');
            $table->string('tema_diskon')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diskon');
    }
    
};
