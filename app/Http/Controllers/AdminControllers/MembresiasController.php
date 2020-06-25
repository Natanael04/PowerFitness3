<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Requests\MembresiasActualizarRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Membresia;
use DB;
use App\User;

class MembresiasController extends Controller
{
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
        $membresias = Membresia::with('users')
        ->join('users', 'users.id', '=', 'membresias.user_id')
        ->select('users.id as user_id', 'users.rut', 'users.name', 'users.apellido', 
                 'membresias.precio', 'membresias.id',
                 'membresias.fechaInicio', 'membresias.fechaTermino' ,'membresias.estado'
                 )
        ->get();
        return view('Administrador/Membresias', compact('membresias'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $membresia = Membresia::findOrFail($id);

        return view('Administrador.ModificarMembresia', compact('membresia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(MembresiasActualizarRequest $request, $id)
    {
        $membresia = Membresia::findOrFail($id);

        $membresia->precio = $request->precio;
        $membresia->fechaInicio = $request->fechaInicio;
        $membresia->fechaTermino = $request->fechaTermino;
        $membresia->estado = $request->estado;

        if ($membresia->estado == 'on') {
            $membresia->estado = 1;
        }

        if ($membresia->estado == null) {
            $membresia->estado = 0;
        }
        
/*         dd($membresia);
 */
        $membresia->save();

        return redirect('/Membresias/listar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
