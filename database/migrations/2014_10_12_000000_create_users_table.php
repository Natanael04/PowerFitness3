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


        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut')->unique();
            $table->string('name');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('membresias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('precio');
            $table->date('fechaInicio');
            $table->date('fechaTermino');
            $table->integer('user_id')->unsigned(); // Relación con usuarios
            $table->foreign('user_id')->references('id')->on('users'); // clave foranea
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
