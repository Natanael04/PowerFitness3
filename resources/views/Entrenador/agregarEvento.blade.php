@extends('layouts.sidevarEntrenador')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<body class="fondo">

  <div class="container" style="display: flex;
  align-items: center;
  justify-content: center;">
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="opacity: 1;">
          <div class="card-header">
            <h2 class="text-center">Agregar Nuevo Evento</h2>
          </div>
        <div class="card-body">
          @if (count($errors) > 0)
        <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <ul>
          @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
         </ul>
        </div>
       @endif
       @if ($message = Session::get('success'))
       <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
       </div>
       @endif
  <form action="{{ asset('/agregarEvento/create/') }}" method="post">
                      @csrf
            {{-- <div class="form-group row">
              <label class="col-lg-4 col-form-label form-control-label">Rut</label>
              <div class="col-lg-8">
                          <input class="form-control" type="text" id="rut" name="rut" oninput="checkRut(this)" required maxlength="10" value="{{$miembro->rut}}">
              </div>
            </div> --}}
            <div class="form-group row">
              <label class="col-lg-4 col-form-label form-control-label">Titulo</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" id="titulo" name="titulo" required autocomplete="off">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-4 col-form-label form-control-label">Descripción</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" id="descripcion" name="descripcion" required autocomplete="off">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-4 col-form-label form-control-label">Fecha</label>
              <div class="col-lg-8">
                <input class="form-control" type="date" id="fecha" name="fecha" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-4 col-form-label form-control-label">Cliente</label>
              <div class="col-lg-8">
                <select class="form-control" id="rutCliente" name="rutCliente">
                  <option value="" selected disabled>Seleccione Cliente</option>
                  @foreach ($miembros as $miembro)
                  <option value="{{ $miembro->rut }}">{{ $miembro->name }} {{ $miembro->apellido }}</option>
                  @endforeach
                  
                </select>
              </div>
            </div>
  				  <script>
              $(document).ready(function() {
                $('#rutCliente').select2();
              });
            </script>
        </div>
      <div class="card-footer text-right">
            <input type="submit" class="btn btn-danger" value="Guardar">
      </div>
    </form>
  </div>
  
    </div>
    </div>
  </div>
</body>
@endsection