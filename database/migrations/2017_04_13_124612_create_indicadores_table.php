<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('descripcion_corta');
            $table->string('archivo_adjunto')->nullable();
            $table->string('fuente')->nullable();
            $table->smallInteger('estado')->default(1);
            $table->dateTime('fecha_publicacion')->nullable();
            
            $table->integer('province_id')->unsigned();

            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('provinces');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('indicators');
    }
}
