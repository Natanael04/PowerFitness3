<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_clase', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('seccion_id')->unsigned(); // Relación con membresias
            $table->foreign('seccion_id')->references('id')->on('seccions'); // clave foranea
            $table->integer('clase_id')->unsigned(); // Relación con membresias
            $table->foreign('clase_id')->references('id')->on('clases'); // clave foranea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seccion_clase');
    }
}
