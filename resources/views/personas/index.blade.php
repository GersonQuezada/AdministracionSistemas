@extends('adminlte::page')
@section('content_header')
    <h1></h1>
@stop

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <div class="container-fluid"></div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Listado de Personal:</h3>
        </div>
        <div class="card-body">
            <table id="ListadoPersonal" style="width:100%">
                <thead>
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

    <script type="text/javascript">
        $("#ListadoPersonal").dataTable({
        ajax : {"cache": false,
                "method":"GET",
                "url":'{{URL('/Personas/ListadoPersonal')}}',
                "dataType": "json",
                "deferRender": true,},
        columns: [
                { data: 'name' },
                { data: 'position' },
                { data: 'office' },
                { data: 'extn' },
                { data: 'start_date' },
                { data: 'salary' }
            ]
        });
    </script>

<script type="text/javascript" src="~/Scripts/jquery.js"></script>
<script type="text/javascript" src="~/Scripts/data-table/jquery.dataTables.js"></script>
@stop


