@extends('layouts.layout')
@section('content')
    <div style="text-align: -moz-center;">

        <img class="mb-4" src="{{ 'logo.png' }}" width="auto" height="72">
        <h1 class="h3 mb-3 font-weight-normal">¡Bienvenida futura mamá!</h1>
        <h1 class="h3 mb-3 font-weight-normal">Escoge aquí qué quieres que tus invitados elijan para comprar en el babyshower</h1>
        <input type="hidden" id="token" value="{{ csrf_token() }}">
        <input type="hidden" id="link" value="{{ $datos['link'] }}">

        <div style="width: 100%;">
            <table>
                @foreach($datos['productosLibres'] as $selec)
                    <tr>
                        <th>{{$selec->marca}}</th>
                        <td>{{$selec->descripcion}}</td>
                        <td>${{$selec->precio}}</td>
                        <td><img style="width:90px;" src="{{ asset('storage/'.$selec->foto) }}"/></td>
                        <td><input type="button" class="btn btn-success" value="Agregar" @click.stop="agregar($event, {{$selec->id_producto}})"></td>
                    </tr>
                @endforeach
                @foreach($datos['productosSelec'] as $libre)
                    <tr>
                        <th>{{$libre->marca}}</th>
                        <td>{{$libre->descripcion}}</td>
                        <td>${{$libre->precio}}</td>
                        <td><img style="width:90px;" src="{{ asset('storage/'.$libre->foto) }}"/></td>
                        <td><input type="button" class="btn btn-danger" value="Quitar" @click.stop="quitar($event, {{$libre->id_producto}})"></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection