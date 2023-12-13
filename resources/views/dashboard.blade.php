@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h3> <i class="fa fa-home"></i> DashBoard Principal </h3>
@stop

@section('content')
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box" style=" background: linear-gradient(45deg , #35155D , #512B81 , #4477CE , #8CABFF )" >
                    <div class="inner">
                        <h3 style="color: white">{{ $persona }}</h3>
                        <p style="color: white">Personas Registradas</p>
                    </div>
                    <div class="icon">
                        <i style="color: white" class="ion fa-solid fa-person-circle-plus"></i>
                    </div>
                    <a href="{{ route('Personas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box" style=" background: linear-gradient(45deg , #3795BD , #2F58CD , #4E31AA , #3A1078 )" >
                    <div class="inner">
                        <h3 style="color: white">130</h3>
                        <p style="color: white">Usuarios Registradas</p>
                    </div>
                    <div class="icon">
                        <i style="color: white" class="ion fa-solid fa-user-plus"></i>
                    </div>
                    <a href="{{ route('Personas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box" style=" background: linear-gradient(45deg , #2C74B3 , #205295 , #144272 , #0A2647 )" >
                    <div class="inner">
                        <h3 style="color: white">26</h3>
                        <p style="color: white">Roles Creados</p>
                    </div>
                    <div class="icon">
                        <i style="color: white" class="ion fa-solid fa-user-gear"></i>
                    </div>
                    <a href="{{ route('Personas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box" style=" background: linear-gradient(45deg , #C69749 , #735F32 , #282A3A , #000000 )" >
                    <div class="inner">
                        <h3 style="color: white">56</h3>
                        <p style="color: white">Sistemas Administrados</p>
                    </div>
                    <div class="icon">
                        <i style="color: white" class="ion fa-solid  fa-network-wired"></i>
                    </div>
                    <a href="{{ route('Personas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop
