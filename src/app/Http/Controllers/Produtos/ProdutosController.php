<?php

namespace App\Http\Controllers\Produtos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Produto;
use App\Model\Categoria;
use App\Model\Colecao;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $prod = Produto::all();
        $user = $request->user();

        return view('produtos.lista-produtos', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(!Auth::check())
            return redirect()->route('user.login');

        $user = $request->user();

        $dado = [
            'colecao'   => Colecao::where('user_id', $user['id'])->get(),
            'categoria' => Categoria::all()
        ];

        return view('produtos.cad-produtos', $dado);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro  = new Produto;
        $col  = new Colecao;
        $user = $request->user();

        /*
         * Para mudar o nome dos campos do formulario na exibição dos erros,
         * cria-se um novo array vazio depois da validação, e outro array com 
         * os nomes dos campos do formulario atribuindo um novo valor a eles, 
         * assim na exibição do erro, será mostrado o nome que voce atribuiu a 
         * esse campo. Conforme abaixo.
         */
       $valida = Validator::make($request->all(),[
            'Pnome'     => 'required|string|max:100',
            'Descricao' => 'required|string|max:100',
            'preco'     => 'required',
            'categoria' => 'required',
            'imagem'    => 'required|image|mimes:jpeg,jpg,png'
        ],[

        ],[
            'Pnome'     => '"Nome da Obra"',
            'Descricao' => '"Descrição"',
            'preco'     => '"Preço"',
            'categoria' => '"Categoria"',
            'imagem'    => '"Suba sua arte"'
        ]);

        if($valida->fails()){
            return redirect()->route('item.create')->withErrors($valida)->withInput();
        }
        
        $pro->nome_pro      = $request->input('Pnome');
        $pro->cod_categoria = $request->input('categoria');
        $pro->descricao_pro = $request->input('Descricao');
        $pro->preco_pro     = $request->input('preco');

        if(!empty($request->input('colecaoNome'))){
            $col->nome_colecao_col = $request->input('colecaoNome');
            $col->user_id = $user['id'];
            $col->save();
            $pro->cod_colecoes = Colecao::max('id');
        }elseif($request->input('colecao') <> 0){
            $pro->cod_colecoes = $request->input('colecao');
        }else{
            return redirect()->route('item.create')->with('error', 'Coleção inválida, selecione ou crie sua coleção')->withInput();
        }

        if($request->hasFile('imagem')){
            $pro->ende_foto_pro = $request->file('imagem')->store('public');
        }

        $pro->user_id = $user['id'];
        
        $pro->save();

        return redirect()->route('item.create')->with('success', 'Arte cadastrada com sucesso');
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
    public function edit(Request $request, $id)
    {
        if(!Auth::check())
            return redirect()->route('user.login');

        $user      = $request->user();
        $atu       = Produto::find($id);
        $colecao   = Colecao::where('user_id', $user['id'])->get();
        $categoria = Categoria::all();

        if($user['id'] <> $atu->user_id)
            return redirect()->route('profile.index', $user['id'])->with('error', 'Você não tem permissão para editar este item!');

        return view('produtos.atu-produtos', compact('atu', 'colecao', 'categoria'));
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
        $pro  = Produto::find($id);
        $col  = new Colecao;
        $user = $request->user();

        $valida = Validator::make($request->all(),[
            'Pnome'     => 'required|string|max:100',
            'Descricao' => 'required|string|max:100',
            'preco'     => 'required',
            'categoria' => 'required',
            'imagem'    => 'image|mimes:jpeg,jpg,png'
        ],[

        ],[
            'Pnome'     => '"Nome da Obra"',
            'Descricao' => '"Descrição"',
            'preco'     => '"Preço"',
            'categoria' => '"Categoria"',
            'imagem'    => '"Altere sua arte"'
        ]);

        if($valida->fails()){
            return redirect()->route('item.edit', $id)->withErrors($valida)->withInput();
        }
        
        $pro->nome_pro      = $request->input('Pnome');
        $pro->cod_categoria = $request->input('categoria');
        $pro->descricao_pro = $request->input('Descricao');
        $pro->preco_pro     = $request->input('preco');

        if(!empty($request->input('colecaoNome'))){
            $col->nome_colecao_col = $request->input('colecaoNome');
            $col->user_id = $user['id'];
            $col->save();
            $pro->cod_colecoes = Colecao::max('id');
        }elseif($request->input('colecao') <> 0){
            $pro->cod_colecoes = $request->input('colecao');
        }else{
            return redirect()->route('item.edit', $id)->with('error', 'Coleção inválida, selecione ou crie sua coleção')->withInput();
        }

        if($request->hasFile('imagem')){
            \Storage::delete($pro->ende_foto_pro);
            $pro->ende_foto_pro = $request->file('imagem')->store('public');
        }

        $pro->user_id = $user['id'];
        
        $pro->save();

        return redirect()->route('item.edit', $id)->with('success', 'Arte alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = $request->user();
        $pro  = Produto::find($id);

        \Storage::delete($pro->ende_foto_pro);
        $pro->delete();
        return redirect()->route('item-perfil.listaArteUsu', $user['id'])->with('success', 'Arte excluida com sucesso');
    }

    public function listaArteColecao(Request $request, $cod_colecoes){
       /* Pega os produtos pelo id da coleção */
        $prod     = Produto::where('cod_colecoes', $cod_colecoes)->get();
        $text     = " por coleção";
        $semDados = "Ops, esta coleção não possui artes!";
        $user     = $request->user();

        /* Se não achar produtos retorna para a view com a mensagem */
        if($prod->count() == 0 )
            return view('produtos.lista-produtos', compact('prod', 'text', 'semDados'));

        /*
         * Se o usuario não estiver logado ou o id do usuario logado for diferente do user_id do produto
         * atribui falso a variavel para mandar a view se pode ou não ver os botões de edição e exclusão
         */
        if(empty($user['id']) || $user['id'] <> $prod[0]->user_id)
            $seeArtsCol = false;
        else 
            $seeArtsCol = true;

        return view('produtos.lista-produtos', compact('prod', 'text', 'seeArtsCol'));
    }

    public function listaArteUsuario($id){
        /* Pega os produtos pelo id do usuario */
        $prod     = Produto::where('user_id', $id)->get();
        $text     = " por usuário";
        $semDados = 'Ops, este usuário não possui artes!';
        $seeArts  = Gate::allows('ver-dados-edit');

        /* Se não achar produtos retorna para a view com a mensagem */
        if($prod->count() == 0)
            return view('produtos.lista-produtos', compact('prod', 'text', 'semDados'));
        else
            return view('produtos.lista-produtos', compact('prod', 'text', 'seeArts'));

    }

    public function excluirColecao($id){
        $colecao = Colecao::find($id);
        $colecao->delete();
        return back()->with('success','Coleção excluida !');
    }

    public function editarColecao(Request $req ,$id){
        $colecao = Colecao::find($id);
        $colecao->nome_colecao_col = $req->only('nome')['nome'];
        $colecao->save();
        return view("home");
    }
}
