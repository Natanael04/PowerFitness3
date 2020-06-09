@extends('layouts.sidevarEntrenador')

@section('content')
<div class="container">
      
      <p class="lead">
      <h3>Evento</h3>
      <p>Formulario de evento</p>
      
      <hr>

      @if (count($errors) > 0)
        <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <ul>
          @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
         </ul>
        </div>
       @endif
       @if ($message = Session::get('success'))
       <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
       </div>
       @endif


      <div class="col-md-6">
        <form action="{{ asset('/agregarEvento/create/') }}" method="post">
          @csrf
          <div class="fomr-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo">
          </div>
          <div class="fomr-group">
            <label>Descripcion del Evento</label>
            <input type="text" class="form-control" name="descripcion">
          </div>
          <div class="fomr-group">
            <label>Fecha</label>
            <input type="date" class="form-control" name="fecha">
          </div>
          <br>
          <input type="submit" class="btn btn-info" value="Guardar">
        </form>
      </div>


      <!-- inicio de semana -->


    </div> <!-- /container -->

    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    Developed by Artyom from
    <a href="https://www.tutofox.com/">  < tutofox/></a>
  </div>
  <!-- Copyright -->

</footer> 
<!-- Footer -->

@endsection