<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_hospital');
            $table->string('direccion_hospital');
            $table->string('departamento');
            $table->string('medico');
            $table->string('especialista');
            $table->date('fecha_actual');
            $table->string('nombres_paciente');
            $table->string('apellidos_paciente');
            $table->date('fecha_paciente');
            $table->integer('edad_paciente');
            $table->string('sexo_paciente');
            $table->string('direccion_paciente');
            $table->string('enfermedad_paciente');
            $table->string('tratamiento_paciente');
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
        Schema::dropIfExists('fichas');
    }
}
