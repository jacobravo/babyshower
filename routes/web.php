<?php

use Illuminate\Support\Facades\Route;

Route::get('index', function () {
    return view('index');
});

Route::post('crearBabyshower', 'CreacionController@crear');

Route::get('retorno', 'ProductosController@cargaEditar');

Route::get('escoger', 'ProductosController@cargaElegir');

Route::post('agregarArticulo', 'ProductosController@agregar');

Route::post('quitarArticulo', 'ProductosController@quitar');

Route::post('comprarArticulo', 'ProductosController@comprar');