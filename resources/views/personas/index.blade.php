@extends('adminlte::page')
@section('content_header')
    <h1></h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Personal:</h3>
            </div>
            <div class="card-body">
                <form class="form-horizontal" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name = "search" class="form-control" placeholder="Escriba el nombre completo para buscar" aria-label="Escriba el nombre completo para buscar" aria-describedby="button-addon2">
                        <button class="btn btn-outline-info" type="submit" id="button-addon2">Buscar</button>
                    </div>
                </form>

                <table id="Personas" class="table table-hover border" style="width:100%">
                    <thead class="thead-dark text-white">
                        <tr>
                            <th>DNI</th>
                            <th>Nombres</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach ($Personas as $p)
                        <tr>
                            <td>{{$p->VC_DNI}}</td>
                            <td> {{ $p->VC_NOMBRE}}</td>
                            <td>{{$p->VC_APELLIDO_PATERNO}}</td>
                            <td>{{$p->VC_APELLIDO_MATERNO}}</td>
                            @if ( $p->BT_ESTADO_FILA = 0)
                                <td><img width="25px" height="25px"  src={{ asset('../img/failed.png') }}></td>
                            @else
                                <td><img width="25px" height="25px" src={{ asset('../img/accept.png') }}></td>
                            @endif
                            
                            <td>
                                <a href="">Editar</a>
                                <a href="">Ver</a>
                                <form action="" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button>Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination-sm m-0 float-right">
                    {{$Personas->links()}}
                </ul>
            </div>
        </div>
    </div>
@stop


