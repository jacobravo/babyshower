<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogoBabyshowers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_babyshowers', function (Blueprint $table) {
            $table->increments('id_catalogo_babyshower');
            $table->integer('id_fk_babyshower');
            $table->integer('id_fk_producto');
            $table->integer('comprado');
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
        Schema::dropIfExists('catalogo_babyshowers');
    }
}
