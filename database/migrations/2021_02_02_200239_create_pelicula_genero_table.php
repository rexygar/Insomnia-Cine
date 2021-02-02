<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculaGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula_genero', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pelicula_id')->unsigned();
            $table->bigInteger('genero_id')->unsigned();
            $table->foreign('pelicula_id')->references('id')->on('pelicula')->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('genero')->onDelete('cascade');
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
        Schema::dropIfExists('pelicula_genero');
    }
}
