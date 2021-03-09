<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_personal');
            $table->string('apellidos_personal');
            $table->date('fnacimiento_personal');
            $table->integer('edad_personal');
            $table->string('sexo_personal');
            $table->string('identidad_personal', 13 )->unique();
            $table->string('direccion_personal');
            $table->string('profesionPersonal');
            $table->string('cargo');
            $table->string('email')->nullable();
            $table->string('telefono_personal', 8)->unique();
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
        Schema::dropIfExists('empleados');
    }
}
