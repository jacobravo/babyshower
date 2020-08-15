<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Babyshower;
use Illuminate\Http\Request;
use App\Http\Helpers\Helpers;

class CreacionController extends Controller
{
    function crear(Request $request){

        try{

            $mail = $request->get('mail');
            $nombreBebe = $request->get('nombreBebe');
            $nombreMama = $request->get('nombreMama');
            $nombrePapa = $request->get('nombrePapa');
            $fechaNacimiento = $request->get('fechaNacimiento');
            $fechaBabyshower = $request->get('fechaBabyshower');

            if(!Helpers::validarMail($mail)){
                return "El e-mail ingresado es inválido";
            }

            if(strtotime("+4 month", strtotime(now())) < strtotime(date($fechaNacimiento))){
                return "La mamá debe tener al menos 5 meses de embarazo";
            }

            $obj = new Babyshower();

            $obj->email = $mail;
            $obj->nombreBebe = $nombreBebe;
            $obj->nombreMama = $nombreMama;
            $obj->nombrePapa = $nombrePapa;
            $obj->fechaNacimiento = $fechaNacimiento;
            $obj->fechaBabyshower = $fechaBabyshower;
            $obj->randomGet = random_int(1, 99999);
            $obj->randomEdit = random_int(1, 99999);

            $obj->save();

            $id = $obj->id;

            $linkGet = $obj->randomGet;
            $linkEdit = $obj->randomEdit;

            $links = compact('linkGet', 'linkEdit');

            return view("linksView")->with("links", $links);
        }
        catch(Exception $ex){

            return $ex;
        }
    }
}
