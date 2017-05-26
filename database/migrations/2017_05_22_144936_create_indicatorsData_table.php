<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicatorsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('indicatorsData', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable();
            $table->decimal('2000',18,2)->nullable();
            $table->decimal('2001',18,2)->nullable();
            $table->decimal('2002',18,2)->nullable();
            $table->decimal('2003',18,2)->nullable();
            $table->decimal('2004',18,2)->nullable();
            $table->decimal('2005',18,2)->nullable();
            $table->decimal('2006',18,2)->nullable();
            $table->decimal('2007',18,2)->nullable();
            $table->decimal('2008',18,2)->nullable();
            $table->decimal('2009',18,2)->nullable();
            $table->decimal('2010',18,2)->nullable();
            $table->decimal('2011',18,2)->nullable();
            $table->decimal('2012',18,2)->nullable();
            $table->decimal('2013',18,2)->nullable();
            $table->decimal('2014',18,2)->nullable();
            $table->decimal('2015',18,2)->nullable();
            $table->decimal('2016',18,2)->nullable();
            $table->decimal('2017',18,2)->nullable();
            $table->decimal('2018',18,2)->nullable();
            $table->integer('numero')->nullable();
            $table->integer('departament_id')->unsigned()->nullable();
            $table->integer('province_id')->unsigned()->nullable();
            $table->integer('distrit_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('departament_id')->references('id')->on('departaments');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('distrit_id')->references('id')->on('distrits');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('indicatorsData');
    }
}
