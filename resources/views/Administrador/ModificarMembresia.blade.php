@extends('layouts.nav')

@section('content')
<html>


<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>
<body class="fondo">
	
<div class="container">
	<div class="mx-auto col-sm-5 main-section" id="myTab" role="tablist">
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="form" role="tabpanel" aria-labelledby="form-tab">
			<div class="card">
				<div class="card-header">
					<h4>Editar Membresia</h4>
				</div>
				<div class="card-body">
					<!-- Formulario de usuarios-->

                <form action="{{ route('membresias.actualizar', $membresia->id)}}" method="post">
                    @csrf
					<div class="form-group row">
						<label class="col-sm-4 col-form-label form-control-label">Coste</label>
						<div class="col-sm-8">
                        <input class="form-control" type="number" id="precio" name="precio" maxlength="5" required value="{{$membresia->precio}}">
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-sm-4 col-form-label form-control-label">Fecha inicio</label>
						<div class="col-sm-8">
                        <input class="form-control" type="date" id="fechaInicio" name="fechaInicio" required value="{{$membresia->fechaInicio}}">
						</div>
                    </div>
                    <div class="form-group row">
						<label class="col-sm-4 col-form-label form-control-label">Fecha Vecimiento</label>
						<div class="col-sm-8">
                        <input class="form-control" type="date" id="fechaTermino" name="fechaTermino" required value="{{$membresia->fechaTermino}}">
						</div>
                    </div>
                    <input id="varEstado" name="varEstado" hidden value="{{$membresia->estado}}"></input>
                    <div class="form-group row">
						<label class="col-sm-4 col-form-label form-control-label">Estado</label>
						<div class="col-sm-8">
                            <input type="checkbox" id="estado" name="estado" data-toggle="toggle" data-on="Activo" data-off="Inactivo" data-onstyle="warning" data-offstyle="danger">
                        </div>
                        <script>
                            $(function() {
                                if ($('#varEstado').val() == 1) {
                                    $('#estado').bootstrapToggle('on');
                                }
                                
                            })
                        </script>
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
{{-- $('#estado').bootstrapToggle({
                                
    on: '1',
    off: '0'
  }); --}}
@endsection