@extends('layouts.nav')

@section('content')

<body class="fondo">
	
<div class="container1">
	<div class="mx-auto col-sm-11 main-section" id="myTab" role="tablist">
		<ul class="nav nav-tabs justify-content-end">
			<li class="nav-item">
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Lista de miembros</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
			  <div class="card">
				<div class="card-header">
					<div class="row ml-4 mr-2">
						<div class="col-sm-4 ">
							<h3>Lista de Miembros</h3>
						</div>
						<div class="col-sm-8 text-right">
							@can('crear-cliente')
							<a href="{{ route('miembros.crear')}}" class="btn btn-secondary">Agregar Nuevo miembro  <i class="fas fa-user-plus"></i></a>
							@else
							@endcan
						</div>
					</div>
				</div>
				<div class="card-body">
						<!-- Lista de usuarios-->
						<div class="table-responsive">
							<table id="Tabla" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
									<th class="text-center" scope="col">ID</th>
									<th class="text-center" scope="col">Rut</th>
									<th class="text-center" scope="col">Nombre</th>
									<th class="text-center" scope="col">Apellido</th>
									<th class="text-center" scope="col">Email</th>
									<th class="text-center" scope="col">rol</th>
									<th class="text-center" scope="col">Accion</th>
								</tr>
								</thead>
								<tbody>
									
									@foreach ($miembros as $miembro)
									<tr>
									<td class="text-center">{{ $miembro->id }}</td>
									<td class="text-center">{{ $miembro->rut }}</td>
									<td class="text-center">{{ $miembro->name }}</td>
									<td class="text-center">{{ $miembro->apellido }}</td>
									<td class="text-center">{{ $miembro->email }}</td>
									<td class="text-center">{{ $miembro->roles->implode('name', ', ') }}</td>
									<td class="text-center">
										@can('leer-cliente')
											<a class="px-1" href="#miembroModal-{{$miembro->id}}" data-toggle="modal" title="{{ $miembro->name }}"><i class="fas fa-eye"></i></a>|
										@else
										@endcan
										@can('modificar-cliente')
											<a class="px-1" href="{{ route('miembros.modificar', $miembro->id)}}"><i class="fas fa-edit"></i></a>|
										@else
										*
										@endcan
										@can('eliminar-cliente')
											<a class="px-1" href="{{ route('miembros.eliminar', $miembro->id)}}"><i class="fas fa-user-times "></i></a>
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
@foreach($miembros as $miembro)
<div class="container">
	<div class="modal fade" id="miembroModal-{{$miembro->id}}" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="col-sm-10 modal-tittle">Detalle Usuario: {{$miembro->name}}</h4>
					<button tyle="button" class="col-sm-2 close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row ml-4">
						<div class="col-sm-6">
							<p class="font-weight-bold">Rut:</p>
							<p class="font-weight-bold">Nombre:</p>
							<p class="font-weight-bold">Apellido:</p>
							<p class="font-weight-bold">Email:</p>
							<p class="font-weight-bold">Tipo Usuario:</p>
							<p class="font-weight-bold">Costo Membresia:</p>
							<p class="font-weight-bold">Fecha Inicio:</p>
							<p class="font-weight-bold">Fecha Vencimiento:</p>
						</div>
						<div class="col-sm-6">
							<p>{{$miembro->rut}}</p>
							<p>{{$miembro->name}}</p>
							<p>{{$miembro->apellido}}</p>
							<p>{{$miembro->email}}</p>
							<p>{{$miembro->roles->implode('name', ', ') }}</p>
							<p>{{$miembro->precio}}</p>
							<p>{{$miembro->fechaInicio}}</p>
							<p>{{$miembro->fechaTermino}}</p>

						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
</body>
@endsection