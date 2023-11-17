@extends('adminlte::page')

@section('content_header')
    <h1>Modificacion de Informacion Personal:</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informacion Basica:</h3>
        </div>
        <form class="form-horizontal" action="#" method="post">
            @method("PUT")
            @include('personas._form',["task" => "edit"])
            <div class="card-footer">
                <input type="submit" class="btn btn-success" value="Grabar">
                <input type="buttom" class="btn btn-success" value="Volver">
            </div>
        </form>
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
