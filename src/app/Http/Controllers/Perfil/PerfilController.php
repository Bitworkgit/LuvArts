<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Model\Usuario;
use App\Model\Carrinho;
use App\Model\Colecao;
use App\Model\Categoria;

class PerfilController extends Controller
{

    protected function index($user_id){
        $user = Usuario::find($user_id);

        if($user->bloqueado == 1 || $user->excluido == 1){
            return back();
        }

        $colecoes = Colecao::where('usuario_id',$user_id)->get();
        $see = Gate::allows('ver-dados');
        $verAdm = Gate::allows('admin');
        $categorias = Categoria::all();
        $carrinho = Carrinho::where('comprador_id',$user_id)->get();
        if(empty($user)){
            return redirect()->route("home");
        }
        else {
            return view('usuario/perfil',compact('user','colecoes', 'see', 'verAdm','categorias','carrinho'));
        }
    }  

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => 'required|string|max:146',
            'website' => 'required|string',
            'celular' => 'nullable|string|max:14',
            'cpf' => 'nullable|string|max:14',
            'biografia' => 'required|string',
            'endereço' =>  'nullable|integer',
            'cep' => 'nullable|string|max:9',
            'complemento' => 'nullable|string|max:100',
            'rua' => 'nullable|string|max:60',
            'cidade' => 'nullable|string|max:30',
            'bairro' => 'nullable|string|max:60',
            'estado' => 'nullable|string|max:19',
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
            //$user->foto_perfil = $requisicao->file('foto_perfil')->store('public');

            /* Define a altura e largura padrão */
            $altura = 200;
            $largura = 200;
            
            /* Pega o hash da imagem para salvar o nome */
            $nome = $requisicao->file('foto_perfil')->store('public');
            
            /* Deleta a imagem criada acima */
            Storage::delete($nome);

            $imagem = $requisicao->file('foto_perfil');

            /* Pega o tamanho da imagem original e salva nas var $largura_original, $altura_original */
            list($largura_original, $altura_original) = getimagesize($imagem);

            /* Calcula o ponto para imagem não ficar desproporcional */
            $proporcao = $largura_original / $altura_original;

            /* Faz o teste para definir o tamanho ideal da imagem de acordo com o definido na altura e largura */
            if($largura / $altura > $proporcao){
                $largura = $altura * $proporcao;
            }else{
                $altura = $largura / $proporcao;
            }

            /* Cria nova imagem em branco */
            $imagem_final = imagecreatetruecolor($largura, $altura);

            /* Salva o nome da imagem no banco */
            $user->foto_perfil = $nome;

            $nome = explode("/", $nome);

            /* Se dependendo da extensão da img, ele cria a imagem nova e salva no diretório */
            if($requisicao->file('foto_perfil')->getClientOriginalExtension() == 'png'){
                $imagem_original = imagecreatefrompng($imagem);
                imagecopyresampled($imagem_final, $imagem_original, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);
                imagepng($imagem_final, $_SERVER['DOCUMENT_ROOT']. "\storage/" . $nome[1]);
            }else{
                $imagem_original = imagecreatefromjpeg($imagem);
                imagecopyresampled($imagem_final, $imagem_original, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);
                imagejpeg($imagem_final, $_SERVER['DOCUMENT_ROOT']. "\storage/" . $nome[1]);
            }  

        }

        if($requisicao->hasFile('foto_capa')){
            //$user->foto_capa = $requisicao->file('foto_capa')->store('public');
            $nome = $requisicao->file('foto_capa')->store('public');
            $user->foto_capa = $nome;
            /* Deleta a imagem criada acima */
            Storage::delete($nome);

            $imagem = $requisicao->file('foto_capa');

            $nome = explode("/", $nome);

            if($requisicao->file('foto_capa')->getClientOriginalExtension() == 'png'){
                $imagem_original = imagecreatefrompng($imagem);
                imagepng($imagem_original, $_SERVER['DOCUMENT_ROOT']. "\storage/" . $nome[1]);
            }else{
                $imagem_original = imagecreatefromjpeg($imagem);
                imagejpeg($imagem_original, $_SERVER['DOCUMENT_ROOT']. "\storage/" . $nome[1]);
            }  


        }

        $user->save();
        
        return response()->json(['sucesso'=>'Atualizações salvas!']);
    }
}
