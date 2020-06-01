@extends('layouts.nav')

@section('content')

<body class="fondo">
	
<div class="container1">
	<div class="mx-auto col-sm-6 main-section" id="myTab" role="tablist">
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
			  <div class="card">
				<div class="card-header">
					<div class="row ml-4 mr-2">
						<div class="col-sm-5 ">
							<h3>Secciones</h3>
						</div>
						<div class="col-sm-7 text-right">
							@can('crear-cliente')
							<a href="{{ route('secciones.crear')}}" class="btn btn-secondary">Agregar Nueva Seccion  <i class="fas fa-user-plus"></i></a>
							@else
							@endcan
						</div>
					</div>
				</div>
				<div class="card-body">
						<!-- Lista de secciones-->
						<div class="table-responsive">
							<table id="Tabla" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Nombre</th>
									<th scope="col">Hora Inicio</th>
									<th scope="col">Hora Termino</th>
									<th scope="col">Accion</th>
								</tr>
								</thead>
								<tbody>
									
									@foreach ($secciones as $seccion)
									<tr>
									 <td class="text-center">{{ $seccion->id }}</td>
									 <td class="text-center">{{ $seccion->nombre }}</td>
									 <td class="text-center">{{ $seccion->hora_inicio }}</td>
									 <td class="text-center">{{ $seccion->hora_termino }}</td>
									 <td class="text-center">
									@can('modificar-cliente')
										<a class="px-1" href="{{ route('secciones.modificar', $seccion->id)}}"><i class="fas fa-edit"></i></a>|
									@else
									*
									@endcan
									@can('eliminar-cliente')
										<a class="px-1" href="{{ route('secciones.eliminar', $seccion->id)}}" onclick="return confirm('Esta seguro de eliminar?, esta acción es irreversible.')"><i class="fas fa-trash"></i></a>
									@else
									@endcan	
								 </td>
								 </tr>
									@endforeach
								</tbody>
							</table>
						</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
@endsection