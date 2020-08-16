@extends('layouts.layout')
@section('content')
    <div style="text-align: -moz-center;">

        <img class="mb-4" src="{{ 'logo.png' }}" width="auto" height="72">
        <h1 class="h3 mb-3 font-weight-normal">¡Bienvenido invitado!</h1>
        <h1 class="h3 mb-3 font-weight-normal">Escoge aquí qué quieres llevar al babyshower</h1>
        <input type="hidden" id="token" value="{{ csrf_token() }}">
        <input type="hidden" id="link" value="{{ $datos['link'] }}">

        <div style="width: 100%;">
            <table>
                @foreach($datos['productosSelec'] as $selec)
                    <tr>
                        <th>{{$selec->marca}}</th>
                        <td>{{$selec->descripcion}}</td>
                        <td>${{$selec->precio}}</td>
                        <td><img style="width:90px;" src="{{ asset('storage/'.$selec->foto) }}"/></td>
                        <td>
                            @if(!in_array($selec->id_producto, $datos['idProductosComprados']))
                                <input type="button" class="btn btn-info" value="Comprar" @click.stop="comprar($event, {{$selec->id_producto}})">
                            @else
                                <input type="button" disabled class="btn btn-info" value="Comprado">
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
