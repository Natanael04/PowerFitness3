@extends('layouts.nav')

@section('content')

<body class="fondo">
	
<div class="container">
	<div class="mx-auto col-sm-5 main-section" id="myTab" role="tablist">
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">
			<div class="card">
				<div class="card-header">
					<h4>Editar Usuario</h4>
				</div>
				<div class="card-body">
					<!-- Formulario de usuarios-->

@if (count($errors) > 0)
	
		@foreach ($errors->all() as $error)
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>{{ $error }}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
			
		@endforeach
  	
@endif
                <form action="{{ route('miembros.actualizar', $miembro->id)}}" method="post">
                    @csrf
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-control-label">Rut</label>
						<div class="col-lg-8">
                        <input class="form-control" type="text" id="rut" name="rut" oninput="checkRut(this)" required maxlength="10" value="{{$miembro->rut}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-control-label">Nombre</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" id="name" name="name" required value="{{$miembro->name}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-control-label">Apellido</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" id="apellido" name="apellido" required value="{{$miembro->apellido}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-control-label">Email</label>
						<div class="col-lg-8">
							<input class="form-control" type="email" id="email" name="email" required value="{{$miembro->email}}">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-4 col-form-label form-control-label">Contraseña</label>
						<div class="col-sm-8">
						 <div class="input-group">
							<input class="form-control" type="password" id="password" name="password"  required autocomplete="off">
							<div class="input-group-append">
                             <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
						 </div>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-control-label">Tipo Usuario</label>
						<div class="col-lg-8">
                              <select class="form-control" name="rol" required>
                                  
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
						<div class="col-lg-12 text-right">
							<input type="submit" class="btn btn-danger" value="Guardar">
						</div>
					</div>
					<script src="/js/validarRUT.js"></script>
                </form>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</body>
@endsection