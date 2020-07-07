<?php

namespace App\Http\Controllers\ClienteControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Membresia;
use Spatie\Permission\Models\Role;

class MembresiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miembro = User::with('membresias')
        ->join('membresias', 'membresias.user_id', '=', 'users.id')
        ->select('users.id', 'users.rut', 'users.name', 'users.apellido', 'users.email', 
                 'membresias.precio', 'membresias.id as membresias_id',
                 'membresias.fechaInicio', 'membresias.fechaTermino', 'membresias.estado'
                 )
        ->where('users.id', auth()->user()->id)
        ->get();


        return view('/Cliente/Membresia', compact('miembro'));
    }
    public function listaVencida()
    {
        $miembro = User::with('membresias')
        ->join('membresias', 'membresias.user_id', '=', 'users.id')
        ->select('users.id', 'users.rut', 'users.name', 'users.apellido', 'users.email', 
                 'membresias.precio', 'membresias.id as membresias_id',
                 'membresias.fechaInicio', 'membresias.fechaTermino', 'membresias.estado'
                 )
        ->where('users.id', '=', auth()->user()->id)
        ->get();


        return view('/Cliente/MembresiaVencida', compact('miembro'));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
