<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_mediamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mes',20)->nullable();
            $table->string('anio',20)->nullable();
            $table->string('tipo',30)->nullable();
            $table->text('descripcion')->nullable();
            $table->string('glosa')->nullable();
            $table->smallInteger('estado')->default(1);
            

            $table->integer('user_id')->unsigned();
            $table->integer('tipo_reporte_id')->unsigned();

            $table->timestamps();

            $table->foreign('tipo_reporte_id')->references('id')->on('tipos_reporte');
            
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('reporte_mediamentos');
    }
}
