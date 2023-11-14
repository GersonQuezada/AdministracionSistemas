@extends('adminlte::page')
@section('content_header')
    <h1>Listado de Personas</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <x-adminlte-datatable id="table1" :heads="$heads" striped  head-theme="dark">
                @foreach($Personas as $p)
                    <tr>
                        <td>{{ $p->VC_DNI }}</td>
                        <td>{{ $p->VC_NOMBRE }}</td>
                        <td>{{ $p->VC_APELLIDO_PATERNO }}</td>
                        <td>{{ $p->VC_APELLIDO_MATERNO }}</td>
                        <td>{{ $p->BT_ESTADO_FILA }}</td>
                        <td>
                            <div>   
                                <button class="btn btn-xs btn-default text-primary mx-1 inline-block " title="Edit">
                                    <i class="fa fa-lg fa-fw fa-pen"></i>
                                    </button>
                                    <button class="btn btn-xs btn-default text-danger mx-1 display: inline-block" title="Delete">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                    <button class="btn btn-xs btn-default text-teal mx-1 inline-block" title="Details">
                                        <i class="fa fa-lg fa-fw fa-eye"></i>
                                    </button>
                            </div>
                            
                       
                        </td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>

@stop


