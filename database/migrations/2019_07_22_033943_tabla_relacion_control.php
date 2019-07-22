<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaRelacionControl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_control', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_grupo')->unsigned();
            $table->integer('id_asignatura')->unsigned();
            $table->integer('id_periodo')->unsigned();
            $table->integer('id_maestro')->unsigned();
            $table->integer('id_alumno')->unsigned();


            $table->foreign('id_grupo')->references('id')->on('grupos')->onDelete('cascade');

            $table->foreign('id_asignatura')->references('id')->on('asignaturas')->onDelete('cascade');

            $table->foreign('id_periodo')->references('id')->on('periodos')->onDelete('cascade');

            $table->foreign('id_maestro')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('id_alumno')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('relacion_control');
    }
}
