@extends('layouts.nav')

@section('content')

<form action="{{ route('miembros.guardar')}}" method="POST">
	@csrf
	<input type="text" name="rut" placeholder="Ingrese rut">
	<input type="text" name="name" placeholder="Ingrese nombre">
	<input type="text" name="apellido" placeholder="Ingrese apellido">
	<input type="email" name="email" placeholder="Email...">
	<input type="password" name="password" placeholder="Contraseña...">
	<input type="number" name="membresia_id" placeholder="membresia_id">
	<select name="rol">
		@foreach ($roles as $key => $value)
			<option value="{{$value}}">{{ $value }}</option>
		@endforeach
	</select>
	<input type="submit" value="Guardar" class="btn btn-success">
</form>

@endsection