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
            <div class="row">
                <div class="card-body col">
                    <form class="form-horizontal" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" name = "search" class="form-control" placeholder="Escriba el nombre completo para buscar" aria-label="Escriba el nombre completo para buscar" aria-describedby="button-addon2">
                            <button class="btn btn-outline-info" type="submit" id="button-addon2">Buscar</button>
                        </div>
                    </form>

                    <table id="Personas" class="table table-hover  table-responsive border" style="width:100%">
                        <thead class="thead-light text-white text-center">
                            <tr>
                                <th width = "100px">Acciones</th>
                                <th>DNI</th>
                                <th>Nombres</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Estado</th>

                            </tr>
                        </thead>
                        <tbody class="text-sm border">
                            @foreach ($persona as $p)
                            <tr>
                                <td class="border" >
                                    <div class="row">
                                        {{-- <a  class="btn btn-success" href="{{ route('Personas.show',$p->id) }}"><i class="bi bi-eye-fill"></i></a> --}}
                                        <a  class="btn btn-info ml-1" href="" data-toggle="modal" data-target="#modal-lg{{$p->id}}" ><i class="bi bi-clipboard2-check"></i></a>
                                        <form action="{{ route('Personas.destroy',$p->id) }}" method="post">
                                            @method("DELETE")
                                            @csrf
                                            <button  class="btn btn-danger ml-1"><i class="bi bi-x-circle-fill"></i></button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{$p->VC_DNI}}</td>
                                <td> {{ $p->VC_NOMBRE}}</td>
                                <td>{{$p->VC_APELLIDO_PATERNO}}</td>
                                <td>{{$p->VC_APELLIDO_MATERNO}}</td>
                                @if ( $p->BT_ESTADO_FILA == 0)
                                    <td><img width="25px" height="25px"  src={{ asset('../img/failed.png') }}></td>
                                @else
                                    <td><img width="25px" height="25px" src={{ asset('../img/accept.png') }}></td>
                                @endif
                                @include('personas.modal')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination-sm m-0 float-right">
                    {{$persona->links()}}
                </ul>
            </div>
        </div>
    </div>
@stop


