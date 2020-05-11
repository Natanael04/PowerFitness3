<html>
    <head>
        <title></title>
    </head>
    <body>

       <table>
           <thead>
               <th>ID</th>
               <th>Rut</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Email</th>
               <th>Accion</th>
           </thead>
           <tbody>
               @foreach ($usuarios as $usuario)
               <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->rut }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->apellido }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    @can('eliminar-cliente')
                        <a href="{{ route('usuarios.eliminar', $usuario->id)}}">Eliminar usuario</a>
                    @else
                        Usted no puede realizar esta acción
                    @endcan
                </td>
            </tr>
               @endforeach
           </tbody>
       </table>
        
    </body>
</html>