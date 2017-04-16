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
            $table->dateTime('fecha_publicacion')->nullable();
            $table->string('imagen')->nullable();
            $table->integer('orden')->nullable();
            $table->integer('employee_id')->unsigned();
            $table->integer('categoria');
            //$table->integer('publisher_id')->unsigned();
            $table->smallInteger('estado')->default(1);

            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees');
            //$table->foreign('publisher_id')->references('id')->on('publishers');
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
