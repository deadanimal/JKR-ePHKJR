<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('bangunans', function (Blueprint $table) {
            $table->id();
 
            $table->foreignId('projek_id')->constrained('projeks')->cascadeOnDelete()->nullable(); 
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->nullable(); 
            $table->integer('jumlah_markah')->nullable();
            $table->string('peratusan')->nullable();
            $table->string('penarafan')->nullable();
            $table->string('pengesahan')->nullable();
            $table->string('ulasan')->nullable();
            $table->string('rayuan')->nullable();
            $table->string('pengesahan_rayuan')->nullable();

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('bangunans');
    }
};
