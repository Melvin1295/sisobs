<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editorials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->dateTime('anio')->nullable();
            $table->text('descripcion_corta');
            $table->text('descripcion');
            $table->text('titulo_descripcion');
            $table->string('archivo_adjunto')->nullable();
            $table->smallInteger('estado')->default(1);
            $table->dateTime('fecha_publicacion')->nullable();
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users');
        });  
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('editorials');
    }
}
