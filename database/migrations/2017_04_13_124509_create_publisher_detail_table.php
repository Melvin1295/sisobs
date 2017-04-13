<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublisherDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_publishers', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('descripcion_corta')->nullable();
            $table->string('archivo_adjunto')->nullable();
            $table->string('imagen');
            $table->integer('orden');
            $table->integer('autor_id')->unsigned();
            $table->integer('publisher_id')->unsigned();
            $table->smallInteger('estado')->default(1);

            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('authors');
            $table->foreign('publisher_id')->references('id')->on('publishers');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('det_publishers');
    }
}
