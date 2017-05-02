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
            $table->integer('medicamento_id')->unsigned();

            $table->integer('user_id')->unsigned();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
        schema::drop('reporte_mediamentos');
    }
}
