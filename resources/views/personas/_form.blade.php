@csrf
<div class="card-body">
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nombres Completos:</label>
                    <input  class="form-control @error('VC_NOMBRE') is-invalid @enderror" type="text" name="VC_NOMBRE" id="VC_NOMBRE" value="{{ old("VC_NOMBRE",$personas->VC_NOMBRE)}}"   autofocus>
                    @error('VC_NOMBRE')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label>Apellido Paterno: </label>
                    <input  class="form-control @error('VC_APELLIDO_PATERNO') is-invalid @enderror" type="text" name="VC_APELLIDO_PATERNO" id="VC_APELLIDO_PATERNO" value="{{ old("VC_APELLIDO_PATERNO",$personas->VC_APELLIDO_PATERNO)}}"  >
                    @error('VC_APELLIDO_PATERNO')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label>Apellido Materno:</label>
                    <input  class="form-control @error('VC_APELLIDO_MATERNO') is-invalid @enderror" type="text" name="VC_APELLIDO_MATERNO" id="VC_APELLIDO_MATERNO" value="{{ old("VC_APELLIDO_MATERNO",$personas->VC_APELLIDO_MATERNO)}}"  >
                    @error('VC_APELLIDO_MATERNO')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label> Documento de Identidad:</label>
                    <input  class="form-control @error('VC_DNI') is-invalid @enderror" type="text" name="VC_DNI" id="VC_DNI" value="{{ old("VC_DNI",$personas->VC_DNI)}}"  >
                    @error('VC_DNI')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
    </div>
</div>

