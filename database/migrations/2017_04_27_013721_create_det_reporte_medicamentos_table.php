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
        Schema::create('det_reporte_medicamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('glosa')->nullable();
            $table->smallInteger('estado')->default(1);

            $table->integer('medicamento_id')->unsigned();
            $table->integer('reporte_medicamento_id')->unsigned();

            $table->timestamps();

            $table->foreign('medicamento_id')->references('id')->on('medicamentos');
            $table->foreign('reporte_medicamento_id')->references('id')->on('reporte_mediamentos');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
