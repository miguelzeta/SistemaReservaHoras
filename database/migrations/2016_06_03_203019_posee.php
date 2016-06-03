<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posee', function (Blueprint $table) {
            $table->string('IdEspecialidad')->unique()->notnull();
            $table->string('RutUsuario')->unique()->notnull();
            $table->dateTime('FechaEgreso');
            $table->string('Institucion')->notnull();
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
