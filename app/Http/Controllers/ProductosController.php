<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Producto;
use App\Models\Babyshower;
use Illuminate\Http\Request;
use App\Models\CatalogoBabyshowers;

class ProductosController extends Controller
{
    function cargaEditar(Request $request){

        try{

            $link = $request->get('retorno');

            $id_babyshower = Babyshower::where('randomEdit', $link)
                                ->first()->id_babyshower;

            $productosSelec = Producto::join('catalogo_babyshowers', 'id_producto', 'id_fk_producto')
                                        ->where('id_fk_babyshower', $id_babyshower);

            $productosLibres = Producto::whereNotIn('id_producto', $productosSelec->get('id_producto'))
                                        ->get();

            $productosSelec = $productosSelec->get();

            $datos = compact('productosSelec', 'productosLibres', 'link');

            return view('catalogoMama')->with("datos", $datos);

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    function cargaElegir(Request $request){

        try{

            $link = $request->get('escoger');

            $id_babyshower = Babyshower::where('randomGet', $link)
                                        ->first()->id_babyshower;

            $productosSelec = Producto::join('catalogo_babyshowers', 'id_producto', 'id_fk_producto')
                                        ->where('id_fk_babyshower', $id_babyshower);
                                        
            $idProductosComprados = Producto::join('catalogo_babyshowers', 'id_producto', 'id_fk_producto')
                                        ->where('id_fk_babyshower', $id_babyshower)
                                        ->where('comprado', '1')
                                        ->pluck("id_producto")
                                        ->toArray();

            $productosSelec = $productosSelec->get();

            $datos = compact('productosSelec', 'idProductosComprados', 'link');

            return view('catalogoInvitados')->with("datos", $datos);

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    function agregar(Request $request){

        try{

            $articulo = $request->get('art');
            $babyshower = $request->get('babysh');

            $id_babyshower = Babyshower::where('randomEdit', $babyshower)
                        ->first()->id_babyshower;

            $bsh = new CatalogoBabyshowers();

            $bsh->id_fk_babyshower = $id_babyshower;
            $bsh->id_fk_producto = $articulo;
            $bsh->comprado = 0;

            $bsh->save();

            return 1;

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    function quitar(Request $request){

        try{

            $articulo = $request->get('art');
            $babyshower = $request->get('babysh');

            $id_babyshower = Babyshower::where('randomEdit', $babyshower)
                        ->first()->id_babyshower;

            $bsh = CatalogoBabyshowers::where('id_fk_babyshower', $id_babyshower)
                                        ->where('id_fk_producto', $articulo);

            $bsh->delete();

            return 1;

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }

    function comprar(Request $request){

        try{

            $articulo = $request->get('art');
            $babyshower = $request->get('babysh');

            $bsh = CatalogoBabyshowers::join('babyshowers', 'id_babyshower', 'id_fk_babyshower')
                                        ->where('id_fk_producto', $articulo)
                                        ->where('randomGet', $babyshower)
                                        ->first();

            $bsh->comprado = 1;
            $bsh->save();

            return 1;

        }
        catch(Exception $ex){
            return $ex->getMessage();
        }
    }
}
