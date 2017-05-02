<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres')->nullable();            
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('glosa');
            $table->smallInteger('estado')->default(1);

            $table->timestamps();
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('contacts');
    }
}
