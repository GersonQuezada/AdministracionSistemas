@extends('adminlte::page')

@section('content_header')
    <h1>Registro de Usuarios 2:</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informacion Basica:</h3>
        </div>
        <form class="form-horizontal" action= {{ route('Usuarios.store') }}  method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        @csrf

                    </div>
                </div>
            </div>
            <div class="card-footer">
                {{-- <input type="submit" class="btn  btn-outline-success" value="Registrar"> --}}
            </div>
        </form>
    </div>
</div>


@stop
