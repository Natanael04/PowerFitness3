@extends('layouts.sidevarEntrenador')

@section('content')



 <style>
    body{
      font-family: 'Exo', sans-serif;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #EE192D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
    </style>

     
    <!-- Modal -->
    
  <body class="fondo">





    <div class="container rounded" style="background-color:white;">
      
      
      <a class="btn btn-default" style="background-color: #ff3751;color:white; margin-top:2%"  href="{{ asset('/Entrenador/agregarEvento') }}">Crear un evento</a>


      <hr>

      <div class="row header-calendar"  style="background-color: #ff3751;"  >

        <div class="col" style="display: flex; justify-content: space-between; padding: 10px;">
          <a  href="{{ asset('/EntrenadorH/') }}/<?= $data['last']; ?>" style="margin:10px;">
            <i class="fas fa-chevron-circle-left" style="font-size:30px;color:white;"></i>
          </a>
          <h2 style="font-weight:bold;margin:10px;"><?= $mespanish; ?> <small><?= $data['year']; ?></small></h2>
          <a  href="{{ asset('/EntrenadorH/') }}/<?= $data['next']; ?>" style="margin:10px;">
            <i class="fas fa-chevron-circle-right" style="font-size:30px;color:white;"></i>
          </a>
        </div>

      </div>
      <div class="row">
        <div class="col header-col">Lunes</div>
        <div class="col header-col">Martes</div>
        <div class="col header-col">Miercoles</div>
        <div class="col header-col">Jueves</div>
        <div class="col header-col">Viernes</div>
        <div class="col header-col">Sabado</div>
        <div class="col header-col">Domingo</div>
      </div>
      <!-- inicio de semana -->
      @foreach ($data['calendar'] as $weekdata)
        <div class="row">
          <!-- ciclo de dia por semana -->
          @foreach  ($weekdata['datos'] as $dayweek)

          @if  ($dayweek['mes']==$mes)
            <div class="col box-day">
              {{ $dayweek['dia']  }}
              <!-- evento -->
              @foreach  ($dayweek['evento'] as $event) 
                  <a class="badge badge-primary" href="#evento-{{$event->id}}" data-toggle="modal">
                    {{ $event->titulo }}
                  </a>
                  <div class="modal fade" id="evento-{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{ $event->titulo }}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-sm-6">
                                <ul  class="font-weight-bold">Descripción:</ul>
                            </div>
                            <div class="col-sm-5">
                                <ul >{{$event->descripcion}}</ul>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                              <ul  class="font-weight-bold">Fecha:</ul>
                          </div>
                          <div class="col-sm-5">
                              <ul >{{$event->fecha}}</ul>
                          </div>
                      </div>
                        </div>
                        <div class="modal-footer">
                            <div class="col text-left">
                              @can('leer-info-entrenador')
                                <a class="btn btn-danger" href="{{ route('evento.eliminar', $event->id)}}"><i class="fas fa-trash"></i></a>
                              @else
                              *
                              @endcan
                            </div>
                            <div class="col text-right">
                              @can('leer-info-entrenador')
                                <a class="btn btn-warning" href="{{ route('evento.modificar', $event->id)}}"><i class="fas fa-edit"></i></a>
                              @else
                              *
                              @endcan
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
              @endforeach
            </div>
          @else
          <div class="col box-dayoff">
          </div>
          @endif


          @endforeach
        </div>
      @endforeach
    </div>
    </div>
  </body>


@endsection