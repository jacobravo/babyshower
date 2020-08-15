@extends('layouts.layout')
@section('content')
    <div id="contenido" style="text-align: -moz-center;">

        <img class="mb-4" src="{{ 'logo.png' }}" width="auto" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Ya ingresamos tu babyshower. ¿Quieres hacer algo más?</h1>

        <div style="width: 100%;">
            <table>
                <tr>
                    <td>Si quieres editar y agregar productos a tu babyshower para sugerirlos como compras a tus invitados, guarda y usa este link:</td>
                </tr>
                <tr>
                    <td><a href="{{ url('/').'/retorno?retorno='.$links['linkEdit'] }}">{{ url('/')."/retorno?retorno=".$links['linkEdit'] }}</a></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>Para compartir tu babyshower con tus invitados y que seleccionen los productos que tú sugieres, comparte este link:</td>
                </tr>
                <tr>
                    <td><a href="{{ url('/').'/escoger?escoger='.$links['linkGet'] }}">{{ url('/')."/escoger?escoger=".$links['linkGet'] }}</a></td>
                </tr>
            </table>
        </div>
    </div>
@endsection