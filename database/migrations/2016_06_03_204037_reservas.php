<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->string('Med_RutUsuario')->notnull();
            $table->string('RutUsuario')->notnull();
            $table->string('IdSucursal')->notnull();
            $table->dateTime('FechaReserva')->notnull();
            $table->dateTime('HoraReserva')->notnull();
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
