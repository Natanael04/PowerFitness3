<?php

namespace App\Exports;

use App\User;
use App\Membresia;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::with('membresias')
        ->join('membresias', 'membresias.user_id', '=', 'users.id')
        ->select('users.id', 'users.rut', 'users.name', 'users.apellido', 'users.email', 
                 'membresias.precio', 'membresias.id as membresias_id',
                 'membresias.fechaInicio', 'membresias.fechaTermino', 'membresias.estado'
                 )
        ->get();
    }
}
