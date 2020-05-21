<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Traits\HasRoles;
use App\User;
use Spatie\Permission\Models\Role;
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
                 'membresias.fechaInicio', 'membresias.fechaTermino'
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
    public function guardar(Request $request)
    {
        $miembro = new User;

        $miembro->rut = $request->rut;
        $miembro->name = $request->name;
        $miembro->apellido = $request->apellido;
        $miembro->email = $request->email;
        $miembro->password = bcrypt($request->password);

        if ($miembro->save()) {
            //asignar rol
            $miembro->assignRole($request->rol);

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
    public function actualizar(Request $request, $id)
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
            User::findOrFail($id)->delete();
            return redirect()->back();
    }
}
