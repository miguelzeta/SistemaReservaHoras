<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sucursal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->string('IdSucursal')->unique()->notnull();
            $table->string('IdClinica')->notnull();
            $table->string('NombreSucursal');
            $table->string('DireccionSucursal')->notnull();
            $table->string('ComunaSucursal')->notnull();

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
