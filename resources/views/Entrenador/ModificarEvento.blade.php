@extends('layouts.sidevarEntrenador')

@section('content')
<body class="fondo">
<div class="container" style="display: flex;
align-items: center;
justify-content: center;">
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="opacity: 1;">
        <div class="card-header">
          <h1 class="text-center">Modificar Evento</h1>
        </div>
      <div class="card-body">
<form action="{{ route('evento.actualizar', $event->id)}}" method="post">
                    @csrf
					
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-control-label">Titulo</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" id="titulo" name="titulo" required value="{{$event->titulo}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-control-label">Descripción</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" id="descripcion" name="descripcion" required value="{{$event->descripcion}}">
						</div>
          </div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-control-label">Fecha</label>
						<div class="col-lg-8">
							<input class="form-control" type="date" id="fecha" name="fecha" required value="{{$event->fecha}}">
						</div>
					</div>
					
               
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