@extends('adminlte::page')

@section('content_header')
    <h1>Registro de Informacion Personal:</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informacion Basica:</h3>
        </div>
        <form class="form-horizontal" action={{ route('Personas.store')}} method="post">
            @include('personas._form')
            <div class="card-footer">
                <input type="submit" class="btn  btn-outline-success" value="Registrar">
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
