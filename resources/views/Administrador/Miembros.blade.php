@extends('layouts.nav')

@section('content')

<body class="fondo">
	
<div class="container">
	<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
		<ul class="nav nav-tabs justify-content-end">
			<li class="nav-item">
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Lista</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Formulario</a>				   	
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
			  <div class="card">
				<div class="card-header">
					<h4>Miembros</h4>
				</div>
				<div class="card-body">
						<!-- Lista de usuarios-->

						<div class="table-responsive">
							<table id="Tabla" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nombre</th>
									<th scope="col">Apellido</th>
									<th scope="col">Email</th>
									<th scope="col">Seccion</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Marduk</td>
									<td>Henríquez</td>
									<td>elbarto@gmail.com</td>
									<td>zumba</td>
									<td>
										<a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-user-times"></i></a>
									</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>vicente</td>
									<td>Henríquez</td>
									<td>elpixasldlas@gmail.com</td>
									<td>zumba</td>
									<td>
										<a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-user-times"></i></a>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
				</div>
				</div>
			</div>
			<div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
			<div class="card">
				<div class="card-header">
					<h4>Informacion de Usuario</h4>
				</div>
				<div class="card-body">
					<!-- Formulario de usuarios-->

<form class="form" role="form" autocomplete="off">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nombre</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Apellido
							name</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Email</label>
						<div class="col-lg-9">
							<input class="form-control" type="email">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Seccion</label>
						<div class="col-lg-9">
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Contraseña</label>
						<div class="col-lg-9">
							<input class="form-control" type="password">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Confirmar Contraseña</label>
						<div class="col-lg-9">
							<input class="form-control" type="password" >
						</div>
					</div>
					<div class="form-group row">
						<div class="col-lg-12 text-center">
							<input type="reset" class="btn btn-secondary" value="Cancel">
							<input type="button" class="btn btn-primary"
								value="Save Changes">
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