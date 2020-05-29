<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Requests\MiembrosGuardarRequest;
use App\Http\Requests\MiembrosActualizarRequest;
use App\Http\Controllers\Controller;
use Spatie\Permission\Traits\HasRoles;
use App\User;
use App\Membresia;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use DB;

class MiembrosController extends Controller
{
    use HasRoles;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        $miembros = User::with('membresias')
        ->join('membresias', 'membresias.user_id', '=', 'users.id')
        ->select('users.id', 'users.rut', 'users.name', 'users.apellido', 'users.email', 
                 'membresias.precio', 'membresias.id as membresias_id',
                 'membresias.fechaInicio', 'membresias.fechaTermino', 'membresias.estado'
                 )
        ->get();
        return view('Administrador/Miembros', compact('miembros'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        $roles = Role::all()->pluck('name', 'id');

        return view('Administrador.AgregarMiembro', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(MiembrosGuardarRequest $request)
    {
        $miembro = new User;
        $membresia = new  Membresia;


        $miembro->rut = $request->rut;
        $miembro->name = $request->name;
        $miembro->apellido = $request->apellido;
        $miembro->email = $request->email;
        $miembro->password = $request->password;
        //$miembro->password = bcrypt($request->password);
        

/*     dd($miembro);
 */
        if ($miembro->save()) {
            //asignar rol
            $miembro->assignRole($request->rol);
            $miembroID=$miembro->id;
            $membresia->user_id = $miembroID;
            $membresia->estado = 0;

            $membresia->save();
            return redirect('/Miembros/listar');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $miembro = User::findOrFail($id);
        $roles = Role::all()->pluck('name', 'id');

        return view('Administrador.ModificarMiembro', compact('miembro', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(MiembrosActualizarRequest $request, $id)
    {
        $miembro = User::findOrFail($id);

        $miembro->rut = $request->rut;
        $miembro->name = $request->name;
        $miembro->apellido = $request->apellido;
        $miembro->email = $request->email;
        if ($request->password != null) {
            $miembro->password = $request->password;
        }
        $miembro->syncRoles($request->rol);

        $miembro->save();

        return redirect('/Miembros/listar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {

        $miembro = User::findOrFail($id);
        $membresia = Membresia::where('user_id',$miembro->id)->delete();

        User::findOrFail($id)->delete();
        return redirect()->back();
    }
}
