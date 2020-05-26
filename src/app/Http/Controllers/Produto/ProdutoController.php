<?php

namespace App\Http\Controllers\Produto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Model\Carrinho;
use App\Model\Produto;
use App\Model\Categoria;
use App\Model\Colecao;
use App\Model\User;


class ProdutoController extends Controller
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

        //return view('produtos.lista-produtos', compact('prod'));
        return view('layPadrao.layout', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(!Auth::check())
            return redirect()->route('usuario.login');

        $user = $request->user();

        $dado = [
            'colecao'   => Colecao::where('usuario_id', $user['id'])->get(),
            'categoria' => Categoria::all(),
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
            'Descricao' => 'required|string|max:250',
            'preco'     => 'required|numeric|min:10',
            'categoria' => 'required',
            'imagem'    => 'required|image|mimes:jpeg,jpg,png||dimensions:min_width=2480,max_width=3508,min_height=2480,max_height=3508'
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
            $col->usuario_id = $user['id'];
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

        $pro->usuario_id = $user['id'];
        
        $pro->save();

        return redirect()->route('perfil.index',['usuario_id' => Auth::User()->id])->with('success', 'Arte cadastrada com sucesso');
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
            return redirect()->route('usuario.login');

        $user      = $request->user();
        $atu       = Produto::find($id);
        $colecao   = Colecao::where('usuario_id', $user['id'])->get();
        $categoria = Categoria::all();

        if($user['id'] <> $atu->usuario_id && $user['administrador'] <> 1)
            return redirect()->route('perfil.index', $user['id'])->with('error', 'Você não tem permissão para editar este item!');

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
            'Descricao' => 'required|string',
            'preco'     => 'required|numeric|min:10',
            'categoria' => 'required',
            'imagem'    => 'image|mimes:jpeg,png,jpg|dimensions:min_width=2480,max_width=3508,min_height=2480,max_height=3508'
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
            $col->usuario_id = $user['id'];
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

        $pro->usuario_id = $user['id'];
        
        $pro->save();

        return redirect()->route('perfil.index',['usuario_id' => Auth::User()->id])->with('success', 'Arte alterada com sucesso');
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
        $prod     = Produto::where('cod_colecoes', $cod_colecoes)->paginate(6);
        $texto    = " por coleção";
        $semDados = "Ops, esta coleção não possui artes!";
        $user     = $request->user();

        /* Se não achar produtos retorna para a view com a mensagem */
        if($prod->count() == 0 )
            return view('produtos.lista-produtos', compact('prod', 'texto', 'semDados'));

        /*
         * Se o usuario não estiver logado ou o id do usuario logado for diferente do user_id do produto
         * atribui falso a variavel para mandar a view se pode ou não ver os botões de edição e exclusão
         */
        if(empty($user['id']) || $user['id'] <> $prod[0]->usuario_id)
            $seeArtsCol = false;
        else 
            $seeArtsCol = true;

        return view('produtos.lista-produtos', compact('prod', 'texto', 'seeArtsCol'));
    }

    public function listaArteUsuario(Request $request, $id){
        /* Pega os produtos pelo id do usuario */
        $prod     = Produto::where('usuario_id', $id)->paginate(6);
        $texto    = " por usuário";
        $semDados = 'Ops, este usuário não possui artes!';
        $seeArts  = Gate::allows('ver-dados-edit');

        /* Se não achar produtos retorna para a view com a mensagem */
        if($prod->count() == 0)
            return view('produtos.lista-produtos', compact('prod', 'texto', 'semDados'));
        else
            return view('produtos.lista-produtos', compact('prod', 'texto', 'seeArts'));

    }

    public function excluirColecao($id){
        $colecao = Colecao::find($id);
        $colecao->delete();
        return back()->with('success','Coleção excluida!');
    }

    public function editarColecao(Request $req ,$id){
        $colecao = Colecao::find($id);
        $colecao->nome_colecao_col = $req->only('nome')['nome'];
        $colecao->save();
        return back()->with('success','Coleção atualizada!');
    }

    public function comprarProduto($id){
        $produto = Produto::find($id);

        $alternativas = Produto::where('id','!=',$id)
                                        ->inRandomOrder()
                                        ->limit(20)
                                        ->get();


        $artista = User::find($produto->usuario_id);
                                        
        return view('produtos.comprar',compact('produto','alternativas','artista'));
    }

    public function pesquisa($pesquisa = "", $ordem = "DESC"){
        $categorias = Categoria::all();
        $status = 0;
        if($pesquisa == "" || $pesquisa == NULL){
            $status = 1;
        }
        else {
            $produtos = Produto::where('nome_pro','like','%'.$pesquisa.'%')->orderBy('preco_pro',$ordem)->paginate(7);
        }

        if(!isset($produtos) || count($produtos) == 0){
            $status = 1;
            $produtos = "Nada encontrado...";
        }

        if($status == 0){
            return view('produtos.pesquisa', compact('produtos','pesquisa','categorias'));
        } else {
            return view('produtos.pesquisa', compact('produtos','pesquisa','categorias'));
        }
    }

    public function categoria($categoria_id, $ordem = "DESC", $pesquisa = NULL){

        if($pesquisa != NULL && $pesquisa != " "){
            $produtos = Produto::where('cod_categoria',$categoria_id)
                                ->where('nome_pro','like','%'.$pesquisa."%")
                                ->orderBy('preco_pro',$ordem)
                                ->paginate(7);
        }
        else {
            $produtos = Produto::where('cod_categoria',$categoria_id)->orderBy('preco_pro',$ordem)->paginate(7);
            $pesquisa = " ";
        }

        if(count($produtos) == 0){
            $produtos = "Nada encontrado...";
        }

        $categorias = Categoria::all();
        return view('produtos.pesquisa', compact('produtos','pesquisa','categorias','categoria_id'));
    }

    public function removerDoCarrinho($id){
        $produto = Carrinho::find($id);
        $produto->delete();
        return back()->with('success',"Produto removido!");
    }

    public function adicionarAoCarrinho($produto_id,$comprador_id){
        Carrinho::create([
            "comprador_id" => $comprador_id,
            "produto_id" => $produto_id
        ]);
        return redirect()->route('home')->with('success','Produto adicionado ao carrinho!');
    }
}
