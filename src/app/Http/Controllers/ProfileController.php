<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use Intervention\Image\ImageManagerStatic as Image;

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
        return Validator::make($data, [
            'nome' => 'required|string|max:100',
            'website' => 'required|string',
            'celular' => 'nullable|string|max:50',
            'cpf' => 'nullable|string|max:14',
            'biografia' => 'required|string',
            'endereço' =>  'nullable|integer',
            'cep' => 'nullable|string|min:9|max:9',
            'complemento' => 'nullable|string|max:200',
            'rua' => 'nullable|string|max:200',
            'cidade' => 'nullable|string|max:200',
            'bairro' => 'nullable|string|max:200',
            'estado' => 'nullable|string|max:200',
            'foto_perfil' => 'nullable|file|mimes:jpeg,png,jpg',
            'foto_capa' => 'nullable|file|mimes:jpeg,png,jpg'
        ]);
    }

    protected function atualizar(Request $requisicao){
        $dados = $requisicao->only(['nome','website','celular','cpf','biografia','endereço','cep','complemento','rua','cidade','estado','bairro','foto_perfil','foto_capa']);
        $validator = $this->validator($dados);
        if($validator->fails()){
            return response()->json(['erro'=> $validator->errors()->all()]);
        }
        $user = Auth::user();
        $user->nome = $dados['nome'];
        $user->site = $dados['website'];
        $user->celular = $dados['celular'];
        $user->cpf = $dados['cpf'];
        $user->biografia = $dados['biografia'];
        $user->endereco = $dados['endereço'];
        $user->complemento = $dados['complemento'];
        $user->rua = $dados['rua'];
        $user->cep = $dados['cep'];
        $user->cidade = $dados['cidade'];
        $user->estado = $dados['estado'];
        $user->bairro = $dados['bairro'];
        if($requisicao->hasFile('foto_perfil')){
            $user->foto_perfil = $requisicao->file('foto_perfil')->store('public');
        }
        if($requisicao->hasFile('foto_capa')){
            $user->foto_capa = $requisicao->file('foto_capa')->store('public');
        }
        $user->save();
        return response()->json(['sucesso'=>'Atualizações salvas!']);
    }
}
