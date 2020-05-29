<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Traits\HasRoles;
use App\Seccion;
use Spatie\Permission\Models\Role;

class SeccionesController extends Controller
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
       $secciones = Seccion::all();
       return view('Administrador/Secciones', compact('secciones'));
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('Administrador.AgregarSeccion');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $seccion = new Seccion;
        $seccion->nombre = $request->nombre;
        $seccion->hora_inicio = $request->hora_inicio;
        $seccion->hora_termino = $request->hora_termino;
        $seccion->save();

        return redirect('/Secciones/listar');
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
        $seccion = Seccion::findOrFail($id);

        return view('Administrador.ModificarSeccion', compact('seccion'));
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
        $seccion = Seccion::findOrFail($id);

        $seccion->nombre = $request->nombre;
        $seccion->hora_inicio = $request->hora_inicio;
        $seccion->hora_termino = $request->hora_termino;
        
        $seccion->save();

        return redirect('/Secciones/listar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        Seccion::findOrFail($id)->delete();
            return redirect()->back();
    }
}
