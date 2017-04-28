<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetReporteMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_reporte_mediamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable();
            $table->string('glosa')->nullable();
            $table->smallInteger('estado')->default(1);

            $table->integer('reporte_mediamento_id')->unsigned();
            $table->integer('medicamento_id')->unsigned();

            $table->timestamps();

            $table->foreign('reporte_mediamento_id')->references('id')->on('reporte_mediamentos');
            $table->foreign('medicamento_id')->references('id')->on('medicamentos');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('det_reporte_mediamentos');
    }
}
