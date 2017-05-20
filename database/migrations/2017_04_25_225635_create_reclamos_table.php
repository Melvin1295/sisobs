<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres')->nullable();
            $table->string('correo')->nullable();
            $table->string('telefono');
            $table->string('establecimiento')->nullable();
            $table->text('descripcion_reclamo')->nullable();
            $table->smallInteger('estado')->default(1);
            $table->smallInteger('flag1')->default(0);
            $table->smallInteger('flag2')->default(0);
            $table->smallInteger('flag3')->default(0);
            $table->smallInteger('flag4')->default(0);

            $table->integer('ubigeo_id')->unsigned();

            $table->timestamps();

            $table->foreign('ubigeo_id')->references('id')->on('ubigeos');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('reclamos');
    }
}
