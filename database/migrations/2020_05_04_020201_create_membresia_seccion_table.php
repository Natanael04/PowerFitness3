<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresiaSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membresia_seccion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('membresia_id')->unsigned(); // Relación con membresias
            $table->foreign('membresia_id')->references('id')->on('membresias'); // clave foranea
            $table->integer('seccion_id')->unsigned(); // Relación con membresias
            $table->foreign('seccion_id')->references('id')->on('seccions'); // clave foranea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membresia_seccion');
    }
}
