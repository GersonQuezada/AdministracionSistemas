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


@section('js')
    <script type="text/javascript">
        $("#name").select2({
            placeholder: 'Buscar Personal',
        });
        $("#name").select2({
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


