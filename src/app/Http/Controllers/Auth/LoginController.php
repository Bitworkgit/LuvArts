<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function logar(Request $requisicao){
        $campos = $requisicao->only('email','password');
        if(Auth::attempt($campos)){
            $user = $requisicao->user();

            /* Sessão para gravar o id do usuario logado, para ter acesso de qualquer lugar da aplicação */
            session(['loged' => $user->id]);

            return redirect()->route('home');
        } else { 
            return redirect()->route('usuario.login')->with('error','Dados de login não encontrados!');
        }
    }

    protected function logout(Request $request){
        /* Deleta a sessão da aplicação quando o usuario faz logout */
        session()->forget('loged');

        Auth::logout();

        return redirect()->route("usuario.login");
    }
}
