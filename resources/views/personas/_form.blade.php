@csrf
<div class="card-body">
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nombres Completos:</label>
                    <input  class="form-control @error('VC_NOMBRE') is-invalid @enderror" type="text" name="VC_NOMBRE" id="VC_NOMBRE" value="{{ old("VC_NOMBRE",$persona->VC_NOMBRE)}}"   autofocus>
                    @error('VC_NOMBRE')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label>Apellido Paterno: </label>
                    <input  class="form-control @error('VC_APELLIDO_PATERNO') is-invalid @enderror" type="text" name="VC_APELLIDO_PATERNO" id="VC_APELLIDO_PATERNO" value="{{ old("VC_APELLIDO_PATERNO",$persona->VC_APELLIDO_PATERNO)}}"  >
                    @error('VC_APELLIDO_PATERNO')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label>Apellido Materno:</label>
                    <input  class="form-control @error('VC_APELLIDO_MATERNO') is-invalid @enderror" type="text" name="VC_APELLIDO_MATERNO" id="VC_APELLIDO_MATERNO" value="{{ old("VC_APELLIDO_MATERNO",$persona->VC_APELLIDO_MATERNO)}}"  >
                    @error('VC_APELLIDO_MATERNO')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label> Documento de Identidad:</label>
                    <input  class="form-control @error('VC_DNI') is-invalid @enderror" type="text" name="VC_DNI" id="VC_DNI" value="{{ old("VC_DNI",$persona->VC_DNI)}}"  >
                    @error('VC_DNI')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    @if (isset($task) && $task == 'edit')
                        <label for="">Estado:</label>
                        <select  class="custom-select rounded-0" name="Estado" id="Estado">
                            <option value="">Seleccionar</option>
                            <option {{  old("Estado",$persona->BT_ESTADO_FILA) == "1" ? 'selected': '' }}  value="1">Habilitar</option>
                            <option {{  old("Estado",$persona->BT_ESTADO_FILA) == "0" ? 'selected': '' }}  value="0">Deshabilitar</option>
                        </select>
                    @endif
                </div>
            </div>
    </div>
</div>

