@extends('layouts.nav')

@section('content')

<body class="fondo">
	
<div class="container1">
	<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
		<ul class="nav nav-tabs justify-content-end">
			<li class="nav-item">
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Lista de miembros</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
			  <div class="card">
				<div class="card-header">
					<h4>Miembros</h4>
					<div class="col-sm-8">
						<a href="{{ route('miembros.crear')}}"><i class="fas fa-user-plus"></i></a>
					</div>
				</div>
				<div class="card-body">
						<!-- Lista de usuarios-->
						<div class="table-responsive">
							<table id="Tabla" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Rut</th>
									<th scope="col">Nombre</th>
									<th scope="col">Apellido</th>
									<th scope="col">Email</th>
									<th scope="col">rol</th>
									<th scope="col">Accion</th>
								</tr>
								</thead>
								<tbody>
									
									@foreach ($miembros as $miembro)
									<tr>
									 <td>{{ $miembro->id }}</td>
									 <td>{{ $miembro->rut }}</td>
									 <td>{{ $miembro->name }}</td>
									 <td>{{ $miembro->apellido }}</td>
									 <td>{{ $miembro->email }}</td>
									 <td>{{ $miembro->roles->implode('name', ', ') }}</td>
									 <td>
										 @can('modificar-cliente')
											 <a href="{{ route('miembros.modificar', $miembro->id)}}"><i class="fas fa-edit"></i></a> ||
										 @else
										 *
										 @endcan
										 @can('eliminar-cliente')
											 <a href="{{ route('miembros.eliminar', $miembro->id)}}"><i class="fas fa-user-times"></i></a>
										 @else
										 @endcan
										 
{{-- 										 <a href="#"><i class="fas fa-edit"></i></a>
 --}}								 </td>
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