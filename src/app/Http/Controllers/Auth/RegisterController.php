<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:100'],
            'sobrenome' => ['string','max:200'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'senha' => ['required', 'string', 'min:8'],
            'senha_confirmation' => ['required','string','same:senha'],
            'cpf' => ['required','string','unique:usuarios'],
            'sexo' => ['required','min:1','max:1'],
            'data' => ['required'],
            'cep' => ['required'],
            "termos" => ["required"]
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $sobrenome = $data['sobrenome'];
        if(empty($sobrenome)){
            $sobrenome = "";
        }
        else {
            $sobrenome =  " $sobrenome";
        }

        return User::create([
            'name' => $data['nome'].$sobrenome,
            'email' => $data['email'],
            'senha' => Hash::make($data['senha']),
            'cpf' => $data['cpf'],
            'sexo' => intval($data['sexo']),
            'data_de_nascimento' => strtotime($data['data']),
            'cep' => $data['cep'],
            'excluido' => 0,
            "administrador" => 0,
            "bloqueado" => 0
        ]);
    }

    protected function salvar(Request $requisicao){
        $dados = $requisicao->only(['nome',"sobrenome",'email','senha','senha_confirmation','cpf','sexo','data','cep','termos']);
        $validator = $this->validator($dados);

        if($validator->fails()):
            return redirect()->route('user.register')->withErrors($validator)->withInput();
        endif;

        $user = $this->create($dados);
        return redirect()->route('user.login')->with('success', 'Usuário cadastrado com sucesso');

    }
}
?>