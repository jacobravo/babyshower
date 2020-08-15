<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('marca');
            $table->string('descripcion');
            $table->integer('precio');
            $table->string('foto');
            $table->timestamps();
        });

        DB::table('productos')->insert(
            array(
                'marca' => 'Emuwipes',
                'descripcion' => 'Caja de 18 bolsas de toallitas húmedas Emuwipes premium de 80 unidades',
                'precio' => '36500',
                'foto' => '1.jpg'
            ));

        DB::table('productos')->insert(
            array(
                'marca' => 'Bebesit',
                'descripcion' => 'Correpasillo 618 AZUL',
                'precio' => '10980',
                'foto' => '2.jpg'
            ));

        DB::table('productos')->insert(
            array(
                'marca' => 'Disney',
                'descripcion' => 'Coche para muñecas tipo travel system Frozen',
                'precio' => '36980',
                'foto' => '3.jpg'
            ));

        DB::table('productos')->insert(
            array(
                'marca' => 'Emubaby',
                'descripcion' => 'Pañales Desechables Premium Emubaby Talla: M (5 - 10 Kg) 44 uds',
                'precio' => '5990',
                'foto' => '4.jpg'
            ));

        DB::table('productos')->insert(
            array(
                'marca' => 'Waterwipes',
                'descripcion' => 'Toallitas Húmedas 12x60 U. Waterwipes',
                'precio' => '34690',
                'foto' => '5.jpg'
            ));

        DB::table('productos')->insert(
            array(
                'marca' => 'Kidscool',
                'descripcion' => 'Cama elástica Junior. 4.23 metros',
                'precio' => '199990',
                'foto' => '6.jpg'
            ));

        DB::table('productos')->insert(
            array(
                'marca' => 'Toy Story',
                'descripcion' => 'Figura Buzz Lightyear, Guardián Espacial, Toy Story',
                'precio' => '59990',
                'foto' => '7.jpg'
            ));

        DB::table('productos')->insert(
            array(
                'marca' => 'Cry Babies',
                'descripcion' => 'Cry Babies Casita de lágrimas magicas',
                'precio' => '14990',
                'foto' => '8.jpg'
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
