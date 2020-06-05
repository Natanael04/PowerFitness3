@extends('layouts.sidevarEntrenador')

@section('content')
<div id="parallax-image3">
  <div class="">
    
      <h1 class="titulo">AGENDAR</h1>
    
  </div>
</div>
<div class="container1" id="Agendar">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<form action="" method="post">
   id
        <input type="text" name="txtID" id="txtID">
        fecha
        <input type="text" name="txtFecha" id="txtFecha">
        titulio
        <input type="text" name="txtTitulo" id="txtTitulo">
        hora
        <input type="text" name="txtHora" id="txtHora">
        descrip
        <input type="text" name="txtDescription" id="txtDescripction">
        color
        <input type="color" name="txtColor" id="txtColor">
                   {{--  @csrf
          <div class="form-group row">
            <label class="col-sm-4 col-form-label form-control-label">Fecha</label>
            <div class="col-sm-8">
              <input class="form-control" type="text" name="txtFecha" id="txtFecha" required autocomplete="off">
           </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label form-control-label">Titulo</label>
            <div class="col-sm-8">
              <input class="form-control" type="text" name="txtTitulo" id="txtTitulo" required autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label form-control-label">Hora</label>
            <div class="col-sm-8">
              <input class="form-control"type="text" name="txtHora" id="txtHora"required autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label form-control-label">Descripción</label>
            <div class="col-sm-8">
              <input class="form-control"type="text" name="txtDescription" id="txtDescripction"required autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label form-control-label">Color</label>
            <div class="col-sm-8">
              <input class="form-control"type="color" name="txtColor" id="txtColor" required autocomplete="off">
            </div>
          </div>    --}}
 </form>  
      </div>
      <div class="modal-footer">
        <button id="btnAgregar" class="btn btn-success">Agregar</button>
        <button id="btnModificar" class="btn btn-warning">Modificar</button>
        <button id="btnBorrar" class="btn btn-danger">Borrar</button>
        <button id="btnCancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
</div>
	<div id='calendar'></div>
</div>
	


@endsection