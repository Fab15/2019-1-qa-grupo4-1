<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmistadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amistads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idUsuario1')->unsigned();
            $table->foreign('idUsuario1')->references('id')->on('usuarios');
            $table->bigInteger('idUsuario2')->unsigned();
            $table->foreign('idUsuario2')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amistads');
    }
}
