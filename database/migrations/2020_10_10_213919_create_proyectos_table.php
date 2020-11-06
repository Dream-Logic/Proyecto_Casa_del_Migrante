<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fnacimiento');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('cabello');
            $table->string('ojos');
            $table->string('piel');
            $table->string('identidad')->unique();
            $table->string('nacionalidad');
            $table->string('pasaporte')->nullable();
            $table->string('nacimiento');
            $table->string('direccion');
            $table->string('signosFisicos');
            $table->string('enfermedad')->nullable();
            $table->string('tratamiento')->nullable();
           /*datos Madre Y/O representante legal*/
            $table->string('nombresMadre');
            $table->string('apellidosMadre');
            $table->date('fnacimientoMadre');
            $table->string('direccionMadre');
            $table->string('trabajaMadre');
            $table->string('profesionOficio');
            $table->string('identidadMadre')->unique();
            $table->string('pasaporteMadre')->nullable();
            $table->string('civil');
            $table->string('telefono')->nullable();
            /*Datos padre ME FALTAAAAAAA*/
            $table->string('nombresPadre')->nullable();
            $table->string('apellidosPadre')->nullable();
            $table->date('fnacimientoPadre')->nullable();
            $table->string('direccionPadre')->nullable();
            $table->string('trabajaPadre')->nullable();
            $table->string('profesionOficioPadre')->nullable();
            $table->string('identidadPadre')->nullable();
            $table->string('pasaportePadre')->nullable();
            $table->string('civilPadre')->nullable();
            $table->string('telefonoPadre')->nullable();
            /*Datos */
            $table->string('vulneracion');
            $table->string('proteccion');
            /*Datos del tecnico respondable*/
            $table->string('nombretecnico');
            $table->string('apellidotecnico');
            $table->date('fecha');
            $table->time('hora');
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
        Schema::dropIfExists('proyectos');
    }
}
