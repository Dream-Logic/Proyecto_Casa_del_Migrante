<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNarracionHechosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narracion_hechos', function (Blueprint $table) {
            $table->id();
            $table->string('vulneracion');
            $table->string('proteccion');
            $table->foreignId('id_huesped')->references('id')->on('huespeds');
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
        Schema::dropIfExists('narracion_hechos');
    }
}
