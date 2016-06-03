<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trabaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('trabaja', function (Blueprint $table) {
            $table->string('IdEspecialidad')->notnull();
            $table->string('IdSucursal')->notnull();
            $table->string('RutUsuario')->notnull();
            $table->dateTime('FechaIngreso')->notnull();
            $table->dateTime('FechaEgreso');

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
        //
    }
}
