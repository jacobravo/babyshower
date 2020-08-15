<?php

namespace App\Http\Helpers;

class Helpers{

    public static function validarMail($mail){
        
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else{
            return false;
        }
    }
}