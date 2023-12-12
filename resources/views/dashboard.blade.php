@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h3>Panel Principal</h3>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box" style=" background: linear-gradient(45deg , black , purple)" >
                    <div class="inner">
                        <h3>56</h3>
                        <p>Personas Registradas</p>
                    </div>
                    <div class="icon">
                        <i class="ion fa-solid fa-person-circle-plus"></i>                 
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
