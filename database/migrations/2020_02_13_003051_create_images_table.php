<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('ima_id');
            $table->string('img');
            $table->unsignedBigInteger('actividad_id_r');
            $table->foreign('actividad_id_r')->references('actividad_id')->on('actividads')->onDelete('cascade');
            $table->BigInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('codigo')->on('proyectos')->onDelete('cascade');
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
        Schema::dropIfExists('images');
    }
}
