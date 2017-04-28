<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable();
            $table->string('glosa')->nullable();
            $table->smallInteger('estado')->default(1);

            $table->integer('tipo_medicamento_id')->unsigned();

            $table->timestamps();

            $table->foreign('tipo_medicamento_id')->references('id')->on('tipos_medicamentos');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('medicamentos');
    }
}
