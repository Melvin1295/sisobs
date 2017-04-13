<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('publishers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->dateTime('fecha_publicacion')->nullable();
            $table->string('tipo')->nullable();
            $table->string('archivo_adjunto')->nullable();
            $table->smallInteger('estado')->default(1);
            
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
        Schema::drop('publishers');
    }
}
