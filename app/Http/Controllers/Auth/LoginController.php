<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\User;

class LoginController extends Controller
{
 public function login(Request $request)
    {

        if (Auth::attempt(['usuario' =>$request['usuario'], 'password' => $request['password']])) {

            $notification = array('message' => 'Bienvenido'." ".Auth::User()->nombres,'alert-type' => 'success');
            if(Auth::user()->nivel == 1){
                return redirect()->route('user.index')->with($notification);}
                else
                    if(Auth::user()->nivel == 2){return redirect()->route('user.vistam')->with($notification);}
                else
                    if(Auth::user()->nivel == 3){return redirect()->route('user.vistaal')->with($notification);}
                                     
                else{
                    return view('auth.login');
                }
            // Authentication passed...
        }else{
            return view('auth.login');
        }
    }//fin de funcion login
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $redirectAfterLogout = '/login';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' =>['logout','login'] ]);
    }
}
