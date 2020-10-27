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
            $table->string('pasaporte')->unique();
            $table->string('nacimiento');
            $table->string('direccion');
            $table->string('signosFisicos');
            $table->string('enfermedad');
            $table->string('tratamiento');
           /*datos Madre Y/O representante legal*/
            $table->string('nombresMadre');
            $table->string('apellidosMadre');
            $table->date('fnacimientoMadre');
            $table->string('direccionMadre');
            $table->string('trabajaMadre');
            $table->string('profesionOficio');
            $table->string('identidadMadre')->unique();
            $table->string('pasaporteMadre')->unique();
            $table->string('civil');
            $table->string('telefono');
            /*Datos padre ME FALTAAAAAAA*/
            $table->string('nombresPadre');
            $table->string('apellidosPadre');
            $table->date('fnacimientoPadre');
            $table->string('direccionPadre');
            $table->string('trabajaPadre');
            $table->string('profesionOficioPadre');
            $table->string('identidadPadre')->unique();
            $table->string('pasaportePadre')->unique();
            $table->string('civilPadre');
            $table->string('telefonoPadre');
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
