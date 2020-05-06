@extends('layouts.nav')

@section('content')
<h1>agregarrrrr vieka</h1>
<form action="POST" action="{{ route('Agregar')}}">
	@csrf
	<input type="text" name="rut" placeholder="Ingrese rut">
	<input type="text" name="nombre" placeholder="Ingrese nombre">
	<input type="text" name="apellido" placeholder="Ingrese apellido">
	<input type="email" name="email" placeholder="Email...">
	<input type="password" name="password" placeholder="Contraseña...">
	<button>Guardar</button>
</form>

@endsection