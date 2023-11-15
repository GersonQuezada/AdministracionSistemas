@extends('adminlte::page')
@section('content_header')
    <h1></h1>
@stop

@section('content')
    <div class="container-fluid"></div>
    <div class="card card">
        <div class="card-header">
            <h3 class="card-title">Listado de Personal:</h3>
        </div>
        <div class="card-body">
            <table id="articulos"class="table table-bordered table-hover" style="width:100%">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>DNI</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Estado</th>
                    </tr>
                </thead>
               
            </table>            
 
        </div>
    </div> 
@stop

@section('js')

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        ajax:{
                "cache": false,
                "method":"get",
                "url": " {{  URL('/Personas/ListadoPersonal') }}",
                "dataType": "json",
                "deferRender": true,
        },
        columns:[
            {"data" : "VC_DNI"},
            {"data" : "VC_DNI"},
            {"data" : "VC_DNI"},
            {"data" : "VC_DNI"},
            {"data" : "VC_DNI"}
        ],
        lengthMenu: [[5,10, 50, -1], [5, 10, 50, "All"]],
        deferRender: true
    });
} );
</script>

@stop
