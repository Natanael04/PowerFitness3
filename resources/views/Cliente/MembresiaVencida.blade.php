@extends('layouts.sidevarClienteVencido')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<body class="fondo" >
	
<div class="container" style="display: flex;
align-items: center;
justify-content: center;">
    <div class="row">
        <div class="col-md-9" >
            <div class="card" style="opacity:1;width:130%;">
                <div class="card-header">
                    <h4>Información de Membresia.</h4>
                </div>
                <div class="card-body">
                    <div class="card-header">
                        <h5 style="color: red">
                            <strong>Atención!</strong> <br>
                            El estado de su membresía 
                            se encuentra vencido, renueve en gimnasio</h5>
                    </div>
                    <br>
                    @foreach ($miembro as $data)
                        <div class="row">
                            <div class="col-sm-6">
                                <ul style="font-size: 20px;" class="font-weight-bold">Rut:</ul>
                            </div>
                            <div class="col-sm-5">
                                <ul style="font-size: 18px;">{{$data->rut}}</ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul style="font-size: 20px;" class="font-weight-bold">Nombre:</ul>
                            </div>
                            <div class="col-sm-5">
                                <ul style="font-size: 18px;">{{$data->name}}</ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul style="font-size: 20px;" class="font-weight-bold">Apellido:</ul>
                            </div>
                            <div class="col-sm-6">
                                <ul style="font-size: 18px;">{{$data->apellido}}</ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul style="font-size: 20px;" class="font-weight-bold">Email:</ul>
                            </div>
                            <div class="col-sm-6">
                                <ul style="font-size: 18px;">{{$data->email}}</ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul style="font-size: 20px;" class="font-weight-bold">Costo Membresia:</ul>
                            </div>
                            <div class="col-sm-5">
                                @if ( $data->precio == null)
                                <ul style="font-size: 18px;"><em>Sin Datos</em></ul>
                                @else
                                    <ul style="font-size: 18px;">{{ $data->precio }}</ul>
                                @endif                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul style="font-size: 20px;" class="font-weight-bold">Fecha Inicio:</ul>
                            </div>
                            <div class="col-sm-5">
                                @if ( $data->fechaInicio == null)
                                    <ul style="font-size: 18px;"><em>Sin Datos</em></ul>
                                @else
                                    <ul style="font-size: 18px;">{{ $data->fechaInicio }}</ul>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul style="font-size: 20px;" class="font-weight-bold">Fecha Vencimiento:</ul>
                            </div>
                            <div class="col-sm-5">
                                @if ( $data->fechaTermino == null)
                                    <ul style="font-size: 18px;"><em>Sin Datos</em></ul>
                                @else
                                    <ul style="font-size: 18px;">{{ $data->fechaTermino }}</ul>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul style="font-size: 20px;" class="font-weight-bold">Estado Membresia:</ul>
                            </div>
                            <div class="col-sm-5">
                                @if ($data->estado  == 1)
                                    <ul style="font-size: 18px;" class="font-weight-bold"><em>Activo</em></ul>
                                @else
                                    <ul style="font-size: 18px;" class="font-weight-bold"><em>Inactivo</em></ul>
                                @endif
                            </div>
                        </div>
                            </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
			    

</body>
@endsection