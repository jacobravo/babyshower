@extends('layouts.layout')
@section('content')
    <div style="text-align: -moz-center;">

        <img class="mb-4" src="{{ 'logo.png' }}" width="auto" height="72">
        <h1 class="h3 mb-3 font-weight-normal">¡Bienvenida futura mamá!</h1>
        <h1 class="h3 mb-3 font-weight-normal">¿Primera vez que ingresas? ¡Regístrate aquí!</h1>
        <input type="hidden" id="token" value="{{ csrf_token() }}">

        <form>
            <div style="width: 30%;">
                <div class="cont">
                    <label for="mail">Dirección e-mail</label>
                    <input type="email" id="mail" class="form-control" placeholder="ejemplo@ejemplo.com" required autofocus>
                    <br>
                </div>
                <div class="cont">
                    <label for="nombreBebe">Nombre del bebé</label>
                    <input type="text" id="nombreBebe" class="form-control" placeholder="Nombre del bebé" required autofocus>
                    <br>
                </div>
                <div class="cont">
                    <label for="nombreMama">Nombre de la mamá</label>
                    <input type="text" id="nombreMama" class="form-control" placeholder="Nombre de la mamá" required autofocus>
                    <br>
                </div>
                <div class="cont">
                    <label for="nombrePapa">Nombre del papá</label>
                    <input type="text" id="nombrePapa" class="form-control" placeholder="Nombre del papá" required autofocus>
                    <br>
                </div>
                <div class="cont">
                    <label for="fechaNacimiento">Fecha estimada de nacimiento</label>
                    <input type="date" id="fechaNacimiento" min="{{ date('Y-m-d') }}" max="{{ date('Y-m-d', strtotime('+4 month', strtotime(date('Y-m-d')))) }}" class="form-control" placeholder="Fecha estimada de nacimiento" required autofocus>
                    <br>
                </div>
                <div class="cont">
                    <label for="fechaBabyshower">Fecha del babyshower</label>
                    <input type="date" id="fechaBabyshower" min="{{ date('Y-m-d') }}" class="form-control" placeholder="Fecha del babyshower" required autofocus>
                    <br>
                    <br>
                </div>

                <div class="cont">
                    <input id="guardar" class="btn btn-lg btn-primary btn-block" style="width: 70%;" @click.stop="getRetorno" value="Crear tu babyshower" >
                </div>
            </div>
        </form>
    </div>
@endsection