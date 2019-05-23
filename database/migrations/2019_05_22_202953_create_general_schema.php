<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creación de las tablas con sus campos.
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->string('password',250);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email',100)->index();
            $table->string('token',250);
            $table->timestamp('created_at')->nullable();
        });

        // Tablas (catálogos).
        Schema::create('materias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('temas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->unsignedBigInteger('fk_materia');
            $table->timestamps();
        });

        Schema::create('instrucciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('texto');
            $table->unsignedBigInteger('fk_tema');
            $table->unsignedBigInteger('fk_instruccion')->nullable();
            $table->timestamps();
        });

        Schema::create('ejercicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url_imagen')->nullable();
            $table->integer('dificultad');
            $table->timestamps();
        });

        Schema::create('respuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('valor')->nullable();
            $table->string('url_imagen')->nullable();
            $table->timestamps();
        });

        // Tablas (conexión de cátalogos).
        Schema::create('inst_ejercicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fk_instruccion');
            $table->unsignedBigInteger('fk_ejercicio');
            $table->timestamps();
        });

        Schema::create('ejercicios_resp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fk_ejercicio');
            $table->unsignedBigInteger('fk_respuesta');
            $table->timestamps();
        });

        // Creación de las llaves foráneas.
        Schema::table('temas', function (Blueprint $table) {
            $table->foreign('fk_materia')->references('id')->on('materias')->onDelete('cascade');
        });

        Schema::table('instrucciones', function (Blueprint $table) {
            $table->foreign('fk_instruccion')->references('id')->on('instrucciones')->onDelete('cascade');
            $table->foreign('fk_tema')->references('id')->on('temas')->onDelete('cascade');
        });

        Schema::table('inst_ejercicios', function (Blueprint $table) {
            $table->foreign('fk_instruccion')->references('id')->on('instrucciones')->onDelete('cascade');
            $table->foreign('fk_ejercicio')->references('id')->on('ejercicios')->onDelete('cascade');
        });

        Schema::table('ejercicios_resp', function (Blueprint $table) {
            $table->foreign('fk_ejercicio')->references('id')->on('ejercicios')->onDelete('cascade');
            $table->foreign('fk_respuesta')->references('id')->on('respuestas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Desabilitar llaves foráneas.
        Schema::disableForeignKeyConstraints();

        // Eliminación de las tablas (con fk).
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('temas');
        Schema::dropIfExists('instrucciones');
        Schema::dropIfExists('inst_ejercicios');
        Schema::dropIfExists('ejercicios_resp');

        // Eliminación de las tablas (sin fk).
        Schema::dropIfExists('users');
        Schema::dropIfExists('materias');
        Schema::dropIfExists('ejercicios');
        Schema::dropIfExists('respuestas');

        // Desabilitar llaves foráneas.
        Schema::enableForeignKeyConstraints();
    }
}
