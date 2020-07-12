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

</body>
@endsection