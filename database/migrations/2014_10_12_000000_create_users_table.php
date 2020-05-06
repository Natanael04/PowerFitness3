<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('horario');
        });

        Schema::create('seccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
        });

        Schema::create('membresias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('precio');
            $table->date('fechaInicio');
            $table->date('fechaTermino');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('membresia_id')->unsigned(); // Relación con membresias
            $table->foreign('membresia_id')->references('id')->on('membresias'); // clave foranea
            $table->rememberToken();
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
        Schema::dropIfExists('clases');
        Schema::dropIfExists('seccions');
        Schema::dropIfExists('membresias');
        Schema::dropIfExists('users');
    }
}
