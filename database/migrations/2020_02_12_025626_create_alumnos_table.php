<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->BigInteger('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('horas_acumuladas')->default(0);
            $table->integer('horas_acumuladas_servicio')->default(0);
            $table->BigInteger('proyecto_id')->nullable();
            $table->foreign('proyecto_id')->references('codigo')->on('proyectos')->onDelete('cascade');
            $table->BigInteger('servicio_id')->nullable();
            $table->foreign('servicio_id')->references('codigo')->on('proyectos')->onDelete('cascade');
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
        Schema::dropIfExists('alumnos');
    }
}
