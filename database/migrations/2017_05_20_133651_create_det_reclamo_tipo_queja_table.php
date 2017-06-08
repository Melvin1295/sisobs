<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetReclamoTipoQuejaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_reclamos_tipo_quejas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('glosa')->nullable();
            $table->smallInteger('estado')->default(1);

            $table->integer('tipo_queja_id')->unsigned();
            $table->integer('reclamo_id')->unsigned();

            $table->timestamps();
<<<<<<< HEAD
             $table->foreign('tipo_queja_id')->references('id')->on('tipo_quejas');
        $table->foreign('reclamo_id')->references('id')->on('reclamos');
        }); 
       
=======

            $table->foreign('tipo_queja_id')->references('id')->on('tipo_quejas');
            $table->foreign('reclamo_id')->references('id')->on('reclamos');
        }); 
        
>>>>>>> 0dbd44d045f3ea808f4414c95a48acaa33b29dac
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('tipo_quejas');
    }
}
