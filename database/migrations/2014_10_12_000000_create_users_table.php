<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('usuario');
            $table->string('backup_pass');
            $table->string('password');
            $table->integer('nivel')->unsigned();
            $table->integer('estatus')->unsigned();

            $table->foreign('nivel')->references('id')->on('nivel')->onDelete('cascade');

            $table->foreign('estatus')->references('id')->on('estatus')->onDelete('cascade');                        

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
