@extends('layouts.nav')

@section('content')
<html>


<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body class="fondo">
	
<div class="container">
	<div class="mx-auto col-sm-5 main-section" id="myTab" role="tablist">
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">
			<div class="card">
				<div class="card-header">
					<h4>Agregar Nueva Sección</h4>
				</div>
				<div class="card-body">
					<!-- Formulario de usuarios-->

                <form action="{{ route('secciones.guardar')}}" method="post">
                    @csrf
					<div class="form-group row">
						<label class="col-sm-4 col-form-label form-control-label">Nombre</label>
						<div class="col-sm-8">
                        <input class="form-control" type="text" id="nombre" name="nombre">
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-sm-4 col-form-label form-control-label">Hora Inicio</label>
						<div class="col-sm-8">
                        <input class="form-control" type="time" id="hora_inicio" name="hora_inicio">
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-sm-4 col-form-label form-control-label">Hora Termino</label>
						<div class="col-sm-8">
                        <input class="form-control" type="time" id="hora_termino" name="hora_termino">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12 text-right">
							<input type="submit" class="btn btn-danger" value="Guardar">
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
</html>
@endsection