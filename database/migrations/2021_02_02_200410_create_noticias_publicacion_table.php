<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasPublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias_publicacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('noticia_id')->unsigned();
            $table->bigInteger('publicacion_id')->unsigned();
            $table->foreign('noticia_id')->references('id')->on('noticias')->onDelete('cascade');
            $table->foreign('publicacion_id')->references('id')->on('tipo_publicacion')->onDelete('cascade');
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
        Schema::dropIfExists('noticias_publicacion');
    }
}
