<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres_alumno');
            $table->string('apellidos_alumno');
            $table->string('grado');
            $table->string('carrera');
            $table->string('lectura');
            $table->string('escritura');
            $table->string('habilidades');
            $table->string('instrumento');
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
        Schema::dropIfExists('estudiante');
    }
}
