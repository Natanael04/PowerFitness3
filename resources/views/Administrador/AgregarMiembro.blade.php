@extends('layouts.nav')

@section('content')
    <div class="container">
        
        
        <div class="login-content">
            <form action="index.html">
                <img src="images/avatar.svg">
                <h2 class="title">Agregar</h2>
                <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <h5>Rut</h5>
                        <input type="text" class="input">
                   </div>
                </div>
                <div class="input-div pass">
                   <div class="i"> 
                        <i class="fas fa-lock"></i>
                   </div>
                   <div class="div">
                        <h5>Nombre</h5>
                        <input type="text" class="input">
                   </div>
                </div>
                <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <h5>Apellido</h5>
                        <input type="text" class="input">
                   </div>
                </div>
                <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <h5>Email</h5>
                        <input type="email" class="input">
                   </div>
                </div>
                <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" class="input">
                   </div>
                </div>

                
                <input type="submit" class="btnM" value="Gurdar">
            </form>
        </div>
    </div>
    <script>
        const inputs = document.querySelectorAll('.input');
        function focusFunc(){
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }
         function blurFunc(){
            let parent = this.parentNode.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
            
        }
        inputs.forEach(input =>{
            input.addEventListener('focus',focusFunc);
            input.addEventListener('blur',blurFunc);
        })
    </script>

{{-- <form action="{{ route('miembros.guardar')}}" method="POST">
	@csrf
	<input type="text" name="rut" placeholder="Ingrese rut">
	<input type="text" name="name" placeholder="Ingrese nombre">
	<input type="text" name="apellido" placeholder="Ingrese apellido">
	<input type="email" name="email" placeholder="Email...">
	<input type="password" name="password" placeholder="Contraseña...">
	<select name="rol">
		@foreach ($roles as $key => $value)
			<option value="{{$value}}">{{ $value }}</option>
		@endforeach
	</select>
	<input type="submit" value="Guardar" class="btn btn-success">
</form> --}}

@endsection