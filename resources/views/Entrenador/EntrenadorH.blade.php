@extends('layouts.sidevarEntrenador')

@section('content')
<div id="parallax-image">
	<div class="row h-100">
		<div class="col-1-md-12 align-self-center">
			<h1 class="text-center">Agendar</h1>
		</div>
	</div>
</div>
<div class="container1" id="Agendar">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	<div id='calendar'></div>
</div>
<div id="parallax-image1">
	<div class="row h-100">
		<div class="col-1-md-12 align-self-center">
			<h1 class="text-center">Crear Dieta</h1>
		</div>
	</div>
</div>
<div class="container1" id="Dieta">
	<div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
		<ul class="nav nav-tabs justify-content-end">
			<li class="nav-item">
			<a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Lista</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Datos</a>				   	
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
			  <div class="card">
				<div class="card-header">
					<h4>Clientes</h4>
				</div>
				<div class="card-body">
						<!-- Lista de usuarios-->

						<div class="table-responsive">
							<table id="TablaEntrenador" class="table table-bordered table-hover table-striped">
								<thead class="thead-light">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nombre</th>
									<th scope="col">Apellido</th>
									<th scope="col">Fecha</th>
									<th scope="col">Hora inicio</th>
									<th scope="col">Hora Termino</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Marduk</td>
									<td>Henríquez</td>
									<td>14/01/20</td>
									<td>16.10</td>
									<td>16.10</td>
									<td>
										<a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-user-times"></i></a>
									</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Vicente</td>
									<td>manriquez</td>
									<td>14/09/20</td>
									<td>16.10</td>
									<td>16.10</td>
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
					<h4>Informacion de Cliente</h4>
				</div>
				<div class="card-body">
					<!-- Formulario de clientes-->

<form class="form" role="form" autocomplete="off">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nombre</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Apellido</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" >
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Fecha</label>
						<div class="col-lg-9">
							<input class="form-control" type="datetime" readonly="">
							<input size="16" type="text" class="form-control" id="datetime" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Hora inicio</label>
						<div class="col-lg-9">
							<input class="form-control" type="text">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Hora termino</label>
						<div class="col-lg-9">
							<input class="form-control" type="text">
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

@endsection