@extends('layouts.sidevarCliente')

@section('content')
<body class="fondo">
<div id="parallax-image">
  <div class="">
    
      <h1 class="titulo">Horario</h1>
    
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
        <form action="">
            @csrf
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
          </div>   
 </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>
<div class="card-body">
  <div id='calendar'></div>

</div>
</div>
{{-- <div id="parallax-image2">
  <div class="">
    
      <h1 class="titulo">Membresia</h1>
    
  </div>
</div>
<div class="bodylogin">
  <div class="container1"  id="Membresia">
  <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">El Dolor</h3>
                <p class="lead text-light">de hoy mañana será</p>
                <h3 class="font-weight-bold text-light">Tu Fuerza</h3>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">PowerFitness</h1>
                    
                    <p class="text-muted mb-5">Estado de tu membresia</p>

                    
                        
                       
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Es:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" >
                        </div>
                        
                       
                        <button class=" btn1 btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100">Salir</button>
                    
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2019 PowerFitness</small>
                </div>
           </div>
       </div>
   </section> 
</div>
</div> --}}
</body>

@endsection