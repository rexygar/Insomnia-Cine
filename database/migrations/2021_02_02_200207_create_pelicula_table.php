<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo');
            $table->string('Descripcion');
            $table->string('Clasificacion');
            $table->integer('Duracion');
            $table->string('Año_estreno');
            $table->string('IMG_portada');
            $table->string('IMGs');
            $table->boolean('En_Cartelera');
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
        Schema::dropIfExists('pelicula');
    }
}
