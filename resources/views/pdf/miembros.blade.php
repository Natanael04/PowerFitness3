<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table class="table table-striped">
        <thead>
          <tr>
            <th class="text-center" scope="col">ID</th>
            <th class="text-center" scope="col">Rut</th>
            <th class="text-center" scope="col">Nombre</th>
            <th class="text-center" scope="col">Apellido</th>
            <th class="text-center" scope="col">Email</th>
            <th class="text-center" scope="col">rol</th>
            <th class="text-center" scope="col">Estado</th>
            <th class="text-center" scope="col">Precio Mem.</th>
            <th class="text-center" scope="col">Fecha Inicio Mem.</th>
            <th class="text-center" scope="col">Fecha Term. Mem</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($miembros as $miembro)
            <tr>
            <td class="text-center">{{ $miembro->id }}</td>
            <td class="text-center">{{ $miembro->rut }}</td>
            <td class="text-center">{{ $miembro->name }}</td>
            <td class="text-center">{{ $miembro->apellido }}</td>
            <td class="text-center">{{ $miembro->email }}</td>
            <td class="text-center">{{ $miembro->roles->implode('name', ', ') }}</td>
            @if ($miembro->estado  == 1)
                <td class="text-center">Activo</td>
            @else
                <td class="text-center">Inactivo</td>
            @endif
            @if ( $miembro->precio == null)
            <td class="text-center"><em>Sin Datos</em></td>
            @else
                <td class="text-center">{{ $miembro->precio }}</td>
            @endif
            @if ( $miembro->fechaInicio == null)
                <td class="text-center"><em>Sin Datos</em></td>
            @else
                <td class="text-center">{{ $miembro->fechaInicio }}</td>
            @endif
            @if ( $miembro->fechaTermino == null)
                <td class="text-center"><em>Sin Datos</em></td>
            @else
                <td class="text-center">{{ $miembro->fechaTermino }}</td>
            @endif
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>
