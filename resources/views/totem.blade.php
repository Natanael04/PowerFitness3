
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="/css/estilo.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <script src="https://kit.fontawesome.com/1ab39e0b26.js" crossorigin="anonymous"></script>
</head>
<body class="bodylogin">
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
                    
                    <p class="text-muted mb-5">Escaneame.</p>

                    
                        
                       
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="visible-print text-center">
                         {!! QrCode::encoding('UTF-8')->size(250)->backgroundColor(255,55,81)->generate('https://www.powerfitness2.com/Membresia')!!}   
                        </div>
                        <div class="form-group mb-3 {{ $errors->has('rut') ? 'has-error' : '' }}">
                            <label class="font-weight-bold">Rut <span class="text-danger">*</span></label>
                            <input id="rut" name="rut" type="text" class="form-control " placeholder="Ingresa tu rut" autocomplete="off" autofocus oninput="checkRut(this)" maxlength="10">
                            {!! $errors->first('rut', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group mb-3 {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input id="password" name="password" type="password" class="form-control " placeholder="Ingresa tu contraseña" autocomplete="off">
                            <div class="input-group-append">
                             <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                        </div>
                            {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                            
                        </div>
                        <div class="col-md-6">
        
      
   <br>
                        <button type="submit" class=" btn1 btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100">Ingresar</button>
                        <script src="/js/validarRUT.js"></script>
                    </form>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2019 PowerFitness</small>
                </div>
           </div>
       </div>
   </section>



	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     <script type="text/javascript">
        function mostrarPassword(){
        var cambio = document.getElementById("password");
        if(cambio.type == "password"){
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    } 
    
    $(document).ready(function () {
    //CheckBox mostrar contraseña
    $('#ShowPassword').click(function () {
        $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
    });
});
</script>
</body>
</html>