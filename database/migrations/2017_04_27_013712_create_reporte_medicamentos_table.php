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
            $table->string('mes')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('glosa')->nullable();
            $table->smallInteger('estado')->default(1);

            $table->integer('user_id')->unsigned();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
