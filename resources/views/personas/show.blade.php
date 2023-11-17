@extends('adminlte::page')
@section('content_header')
    <h1>Detalle del Personal</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Personal:</h3>
            </div>
            <div class="card-body">
                <p>{{ $persona ->VC_DNI }}</p>
                <p>123123123</p>
            </div>

        </div>
    </div>
@stop
