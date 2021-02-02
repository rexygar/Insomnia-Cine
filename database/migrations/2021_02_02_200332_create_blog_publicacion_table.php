<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_publicacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('blog_id')->unsigned();
            $table->bigInteger('publicacion_id')->unsigned();
            $table->foreign('blog_id')->references('id')->on('blog')->onDelete('cascade');
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
        Schema::dropIfExists('blog_publicacion');
    }
}
