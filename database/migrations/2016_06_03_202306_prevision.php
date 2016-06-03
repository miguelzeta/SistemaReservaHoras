<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prevision extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prevision', function (Blueprint $table) {
            $table->string('IdPrevision')->unique()->notnull();
            $table->string('NombrePrevision')->notnull();
            $table->string('TipoPrevision')->notnull();
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
