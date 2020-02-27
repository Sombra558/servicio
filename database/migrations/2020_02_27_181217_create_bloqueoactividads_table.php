<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloqueoactividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloqueoactividads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('codigo')->on('proyectos')->onDelete('cascade');
            $table->BigInteger('alumno_id');
            $table->unsignedBigInteger('actividad_id_r');
            $table->foreign('actividad_id_r')->references('actividad_id')->on('actividads')->onDelete('cascade');
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
        Schema::dropIfExists('bloqueoactividads');
    }
}
