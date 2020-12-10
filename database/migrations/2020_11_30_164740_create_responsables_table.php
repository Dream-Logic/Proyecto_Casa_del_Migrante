<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fnacimiento');
            $table->string('direccion');
            $table->string('trabaja');
            $table->string('profesionOficio');
            $table->string('identidad')->unique();
            $table->string('pasaporte')->nullable();
            $table->string('civil');
            $table->string('telefono', 8)->unique();
            $table->foreignId('id_huesped')->references('id')->on('huespeds');
            $table->string('parentesco');
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
        Schema::dropIfExists('responsables');
    }
}
