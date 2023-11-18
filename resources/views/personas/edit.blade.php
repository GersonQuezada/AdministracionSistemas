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
                <input type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg" value="Grabar">
                <input type="button" class="btn btn-info"  value="Volver" onclick="Regresar();">

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                    Launch Large Modal
                  </button>
            </div>

        </form>
    </div>

</div>
@stop


@section('js')
    <script type="text/javascript">
        function Regresar() {
            location.href = "{{route('Personas.index')}}";
        }
    </script>
@stop
