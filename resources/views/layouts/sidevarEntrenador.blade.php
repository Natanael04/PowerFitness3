<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" href="https://www.powerfitness.cl/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.powerfitness.cl/images/favicon.ico" type="image/x-icon">
    <title> Gimnasio Power Fitness </title>
    <!-- META -->
    <meta name="fb_admins_meta_tag" content="powerfitnesscoyhaique">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Gimnasio Power Fitness">
    <meta property="og:title" content="Gimnasio Power Fitness">
    <meta property="og:url" content="https://www.powerfitness.cl">
    <meta property="fb:admins" content="powerfitnesscoyhaique">
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <!--JQuery-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Data Table-->  
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1ab39e0b26.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="/css/estilo.css">
   
   <!-- Fullcalendar estilos-->
    <link href='fullcalendar/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
    <link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
    <link href='fullcalendar/list/main.css' rel='stylesheet' />
   <!-- Fullcalendar plugins-->
    <script src='fullcalendar/core/main.js'></script>
    <script src='fullcalendar/daygrid/main.js'></script>
    <script src='fullcalendar/timegrid/main.js'></script>
    <script src='fullcalendar/list/main.js'></script>
    <script src='fullcalendar/interaction/main.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {


          plugins: [ 'dayGrid', 'interaction' , 'timeGrid', 'list' ],

          header:{
            left:'prev,next today',
            center:'title',
            right:'dayGridMonth,timeGridWeek,timeGridDay'
          },
          dateClick:function(info){
             $('#txtFecha').val(info.dateStr);

             $('#exampleModal').modal();
             console.log(info);
             calendar.addEvent({ title:"Evento x",date:info.dateStr});
          }
        });
        calendar.setOption('locale','Es');

        calendar.render();
        
        $('#btnAgregar').click(function(){
            recolectarDato("POST");

        });

      
        function recolectarDato(method){
            nuevoEvento={
                id:$('txtID').val(),
                title:$('txtTitulo').val(),
                description:$('txtDescription').val(),
                color:$('txtColor').val(),
                textColor:'#FFFFFF',
                start:$('txtFecha').val()+" "+$('#txtHora').val(),
                end:$('txtFecha').val()+" "+$('#txtHora').val(), 

                '_token':$("meta[name='csrf-token']").attr("content"),
                '_method':method
            }
            console.log(nuevoEvento);
        }
      });


    </script>
  
    
</head>


<body>

    <div class="wrapper">

        <nav id="sidebar">

            <div id="sidebar-header">
                <a class="navbar-brand" href="{{ route('Home') }}">
                    <img id="" src="images/logo-trans-blanco.png" width="200" height="80" class="d-inline-block align-top" alt="">
                    
                </a>
                
                
            </div>
            <ul class="list-unstyled components">
                <p>datos del loco </p>

                <li class="active">
                    
                   
                            <li class="nav-item">
                                <a class="nav-link" href="#Agendar">{{ __('Agendar') }}</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Salir') }}</a>
                            </li>
                </li>
                
               
            </ul>
    </nav>
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <input type="checkbox" id="btn-menu">
                                        <label for="btn-menu" class="lbl-menu">
                                            <span id="spn1"></span>
                                            <span id="spn2"></span>
                                            <span id="spn3"></span>
                                        </label>
                    
                        </div>
                </nav>
                <br><br>
                
                @yield('content')
            </div>


    </div>


  

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

<script>
   $(document).ready(function(){
      $("#btn-menu").on('click',function(){
        $("#sidebar").toggleClass('active');

      });
      
   });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#TablaEntrenador').dataTable( {
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        } );
    } );
</script>


</body>
</html>