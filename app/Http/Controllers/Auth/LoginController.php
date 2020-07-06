<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Membresia;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath(){

                $administradores = User::whereHas("roles", function($q){ $q->where("name", "Administrador"); })
                ->select('rut')
                ->get();

                foreach ($administradores as $admin => $rut) {
                    if (auth()->user()->rut == $rut->rut) {
                        return('/Miembros/listar');
                    }
                }

                $entrenadores = User::whereHas("roles", function($q){ $q->where("name", "Entrenador"); })
                ->select('rut')
                ->get();

                foreach ($entrenadores as $trainer => $rut) {
                    if (auth()->user()->rut == $rut->rut) {
                        return('/EntrenadorH');
                    }
                }

        $membresiasVenc = Membresia::with('users')
        ->join('users', 'users.id', '=', 'membresias.user_id')
        ->select('users.id as user_id', 'users.rut', 'users.name', 'users.apellido', 
                 'membresias.precio', 'membresias.id',
                 'membresias.fechaInicio', 'membresias.fechaTermino' ,'membresias.estado'
                 )
        ->where('estado', '=', 0)
        ->get();

        foreach ($membresiasVenc as $memVenc => $rut) {
            if (auth()->user()->rut == $rut->rut) {
                /* auth()->logout(); */
/*                 return redirect()->back()->with('errorMem', 'your message,here');
 */            
                return('/MembresiaVenc');
            }
        }
                

                $clientes = User::whereHas("roles", function($q){ $q->where("name", "cliente"); })
                ->select('rut')
                ->get();

                foreach ($clientes as $cliente => $rut) {
                    if (auth()->user()->rut == $rut->rut) {
                        return('/ClienteH');
                    }
                }
            
        

        
        
        return('/Login');
    }
    
    public function username(){
        return 'rut';
    }
}
