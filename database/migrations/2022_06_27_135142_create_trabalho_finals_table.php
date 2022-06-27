<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidade', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->timestamps();
        });
 
        Schema::create('Time', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->unsignedBigInteger('idcidade');
            $table->timestamps();
            $table->foreign('idcidade')->references('id')->on('cidade');
        });
        Schema::create('Torcedor', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->unsignedBigInteger('idcidade');
            $table->unsignedBigInteger('idTime');
            $table->timestamps();
            $table->foreign('idcidade')->references('id')->on('cidade');
            $table->foreign('idTime')->references('id')->on('Time');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabalho_finals');
    }
};
