<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->BigInteger('codigo',20);
            $table->string('titulo');
            $table->text('objGeneral');
            $table->date('inicio');
            $table->date('fin');
            $table->string('comunidad');
            $table->string('carrera');
            $table->unsignedBigInteger('tutor_id')->nullable();
            $table->foreign('tutor_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('estado')->default(0);
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
        Schema::dropIfExists('proyectos');
    }
}
