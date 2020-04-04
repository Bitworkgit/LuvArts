<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{

    protected function index($user_id){
        $user = User::find($user_id);
        if(empty($user)){
            return redirect()->route("home");
        }
        else {
            return view("user/profile",compact('user'));
        }
    }

    protected function validator(array $data)
    {
        //foto de perfil, foto de capa
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:100'],
            'website' => ['string'],
            'celular' => ['string', 'max:28'],
            'cpf' => ["string",'max:11'],
            'biografia' => ['string'],
            'endereço' =>  ['integer'],
            'cep' => ['string','min:9','max:9'],
            'complemento' => ['string'],
            'rua' => ['string','max:200'],
            'cidade' => ['string','max:200']
        ]);
    }

    protected function atualizar(Request $requisicao){
        $dados = $requisicao->only(['nome','website','celular','cpf','biografia','endereço','cep','complemento','rua','cidade','foto_perfil','foto_capa']);
        $validator = $this->validator($dados);
        if($validator->fails()){
            return redirect()->route('profile.index',["user_id" => Auth::user()])->withErrors($validator)->withInput();
        }
        return redirect()->route("user.logar");
    }
}
