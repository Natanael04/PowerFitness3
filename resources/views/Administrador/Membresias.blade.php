@extends('layouts.nav')

@section('content')

<body class="fondo">
	
<div class="container1">
	<div class="mx-auto col-sm-11 main-section" id="myTab" role="tablist">
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
			  <div class="card">
				<div class="card-header">
					<div class="row ml-4 mr-2">
						<div class="col-sm-8 ">
							<h3>Membresias</h3>
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
									<th class="text-center" scope="col">Coste</th>
									<th class="text-center" scope="col">Fecha Inicio</th>
									<th class="text-center" scope="col">Fecha Vencimiento</th>
									<th class="text-center" scope="col">Rut asociado</th>
									<th class="text-center" scope="col">Miembro</th>
                                    <th class="text-center" scope="col">Estado</th>
                                    <th class="text-center" scope="col">Acción</th>
								</tr>
								</thead>
								<tbody>
									@foreach ($membresias as $membresia)
								<tr>
                                    <td class="text-center">{{ $membresia->id }}</td>
                                    @if ( $membresia->precio == null)
                                        <td class="text-center"><em>Sin Datos</em></td>
                                    @else
                                        <td class="text-center">{{ $membresia->precio }}</td>
                                    @endif
                                    @if ( $membresia->fechaInicio == null)
                                        <td class="text-center"><em>Sin Datos</em></td>
                                    @else
                                        <td class="text-center">{{ $membresia->fechaInicio }}</td>
                                    @endif
									@if ( $membresia->fechaTermino == null)
                                        <td class="text-center"><em>Sin Datos</em></td>
                                    @else
                                        <td class="text-center">{{ $membresia->fechaTermino }}</td>
                                    @endif
									<td class="text-center">{{ $membresia->rut }}</td>
									<td class="text-center">{{ $membresia->name }} {{ $membresia->apellido }}</td>
                                    @if ($membresia->estado  == 1)
                                        <td class="text-center">Activa</td>
                                    @else
                                        <td class="text-center">Inactiva</td>
                                    @endif
                                        
									<td class="text-center">
										
										@can('modificar-cliente')
											<a class="px-1" href="{{ route('membresias.modificar', $membresia->id)}}"><i class="fas fa-edit"></i></a>
										@else
										*
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
{{-- @foreach($miembros as $miembro)
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
@endforeach --}}
</body>
@endsection