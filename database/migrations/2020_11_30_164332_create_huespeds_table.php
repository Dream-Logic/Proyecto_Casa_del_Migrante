<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuespedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huespeds', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fnacimiento');
            $table->integer('edad');
            $table->date('ingreso');
            $table->date('egreso')->nullable();
            $table->string('sexo');
            $table->string('cabello');
            $table->string('ojos');
            $table->string('piel');
            $table->string('identidad')->unique();
            $table->string('nacionalidad');
            $table->string('pasaporte')->nullable()->unique();
            $table->string('nacimiento');
            $table->string('direccion');
            $table->string('gradoEscolar');
            $table->string('signosFisicos');
            $table->string('enfermedad')->nullable();
            $table->string('tratamiento')->nullable();
            $table->foreignId('id_usuario')->references('id')->on('users');
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
        Schema::dropIfExists('huespeds');
    }
}
