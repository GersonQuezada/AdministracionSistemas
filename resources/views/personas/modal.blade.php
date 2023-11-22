<form action={{route('Personas.update',$p->id)}} method="POST">
    @method("PUT")
    <div class="modal fade" data-backdrop="static" id="modal-lg{{$p->id}}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title text-red">Datos Basicos - {{ $p->VC_NOMBRECOMPLETO }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    @php
                        $persona = $p;
                    @endphp
                        <div class="row">            
                            <div class="col-md">
                                @include('personas._form',['task'=>'edit'])
                            </div>
                    </div>    
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>    
                </div>
            </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</form>


