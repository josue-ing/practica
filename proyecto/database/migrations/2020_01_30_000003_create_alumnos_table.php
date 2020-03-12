<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('empresa_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->integer('telefono');
            $table->integer('edad');
            $table->timestamps();

            
            //relaciones
            $table->foreign('empresa_id')->references('id')->on('departamentos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
