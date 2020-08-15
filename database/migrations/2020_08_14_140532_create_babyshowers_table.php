<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabyshowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babyshowers', function (Blueprint $table) {
            $table->increments('id_babyshower');
            $table->string('email');
            $table->string('nombreBebe');
            $table->string('nombreMama');
            $table->string('nombrePapa');
            $table->date('fechaNacimiento');
            $table->date('fechaBabyshower');
            $table->integer('randomGet');
            $table->integer('randomEdit');
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
        Schema::dropIfExists('babyshowers');
    }
}
