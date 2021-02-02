<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pelicula_id')->unsigned();
            $table->foreign('pelicula_id')->references('id')->on('pelicula')->onDelete('cascade');
            $table->date('dia');
            $table->dateTime('hora');
            $table->integer('precio');
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
        Schema::dropIfExists('funcion');
    }
}
