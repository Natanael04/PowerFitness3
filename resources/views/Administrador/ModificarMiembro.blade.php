@extends('layouts.nav')

@section('content')

<body class="fondo">
	
<div class="container1">
	<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
		<ul class="nav nav-tabs justify-content-end">
			<li class="nav-item">
			<a class="nav-link active" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="false">Editar Usuario</a>				   	
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">
			<div class="card">
				<div class="card-header">
					<h4>Informacion de Usuario</h4>
				</div>
				<div class="card-body">
					<!-- Formulario de usuarios-->

                <form action="{{ route('miembros.actualizar', $miembro->id)}}" method="post">
                    @csrf
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Rut</label>
						<div class="col-lg-9">
                        <input class="form-control" type="text" id="rut" name="rut" value="{{$miembro->rut}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nombre</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" id="name" name="name" value="{{$miembro->name}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Apellido</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" id="apellido" name="apellido" value="{{$miembro->apellido}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Email</label>
						<div class="col-lg-9">
							<input class="form-control" type="email" id="email" name="email" value="{{$miembro->email}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Contraseña</label>
						<div class="col-lg-9">
							<input class="form-control" type="password" id="password" name="password" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Membresia_ID</label>
						<div class="col-lg-9">
							<input class="form-control" type="number" id="membresia_id" name="membresia_id" value="{{$miembro->membresia_id}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Tipo Usuario</label>
						<div class="col-lg-9">
                              <select class="form-control" name="rol">
                                  
                                @foreach ($roles as $key => $value)
                                    @if ($miembro->hasRole($value))
                                        <option value="{{$value}}" selected>{{ $value }}</option>
                                    @else
                                        <option value="{{$value}}">{{ $value }}</option>
                                    @endif
                                @endforeach
                            </select>
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-lg-12 text-center">
							<input type="submit" class="btn btn-primary" value="Guardar">
						</div>
					</div>
                </form>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</body>
@endsection