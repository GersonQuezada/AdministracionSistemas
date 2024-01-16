{{-- @extends('adminlte::auth.register') --}}
@extends('adminlte::page')

@section('content_header')
    <h1>Registro de Usuarios:</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informacion Basica:</h3>
        </div>
        <form class="form-horizontal" action= {{ route('register') }}  method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        {{-- Name field --}}
                        <div class="form-group mb-3">
                            <label class="form-label " >Nombres Completos </label>
                            <div class="input-group mb-3">
                            <select name="id_persona" id="id_persona" class="form-control @error('id_persona') is-invalid @enderror" >
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                </div>
                            </div>

                            @error('id_persona')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        {{-- Email field --}}
                        <div class="form-group mb-3">
                            <label>Usuario</label>
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                    </div>
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Password field --}}
                        <div class="form-group mb-3">
                            <label>Contraseña</label>
                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="{{ __('adminlte::adminlte.password') }}">

                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                                    </div>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Register button --}}
                        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-success') }}">
                            <span class="fas fa-user-plus"></span>
                            {{ __('adminlte::adminlte.register') }}
                        </button>

                        {{-- <input type="submit" class="btn  btn-outline-success" value="Registrar"> --}}
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


@section('js')
    @if (session('registrado') == 'ok')
    <script>
        Swal.fire({
            title: "Registrado!",
            text: "Usuario registrado correctamente.",
            type: "success"
            });
    </script>
    @endif
    <script type="text/javascript">
        $("#id_persona").select2({
            placeholder: 'Buscar Personal',
        });
        $("#id_persona").select2({
                ajax: {
                    url: '{{ URL('/Persona/BusquedaSelect2')}}',
                    dataType: 'json',
                    type:'get',
                    delay: 250,
                    data: function (data) {
                        return {
                            name: data.term// search term ,
                            ,page : data.page
                        };
                    },
                    processResults: function (response,data) {
                        data.page = response.page||1;
                        return {
                            results:response.data,
                            pagination: {
                                more:data.last_page!=data.page
                            }
                        };
                    },
                cache: true
                },
                templateResult: templateResult,
                templateSelection: templateSelection,
                theme: 'bootstrap-5'
        });

        function templateResult(data) {
            if(data.loading){
                return  data.text
            }
            return data.VC_NOMBRECOMPLETO

        }

        function templateSelection(data) {
            return data.VC_NOMBRECOMPLETO
        }
    </script>
@stop



