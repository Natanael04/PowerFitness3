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

        Schema::create('seccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('hora_inicio');
            $table->string('hora_termino');

            $table->timestamps();
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
            $table->integer('precio')->nullable();
            $table->date('fechaInicio')->nullable();
            $table->date('fechaTermino')->nullable();
            $table->integer('user_id')->unsigned(); // Relación con usuarios
            $table->foreign('user_id')->references('id')->on('users'); // clave foranea
            $table->boolean('estado');	
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
        Schema::dropIfExists('seccions');
        Schema::dropIfExists('membresias');
        Schema::dropIfExists('users');
    }
}
