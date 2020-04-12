<?php

namespace App\Http\Controllers\Produtos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Produto;
use App\Model\Categoria;
use App\Model\Colecao;
use Illuminate\Support\Facades\Validator;


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
        $this->middleware('auth');

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
        $pro = new Produto;
        $col = new Colecao;
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
            return redirect()->route('item.index')->withErrors($valida)->withInput();
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
            return redirect()->route('item.index')->with('error', 'Coleção inválida, selecione ou crie sua coleção')->withInput();
        }

        if($request->hasFile('imagem')){
            /* ---- Para add somente o hash da imagem no banco ----
            $img = $request->file('imagem')->store('public');
            $img = explode('/', $img);
            $pro->ende_foto_pro = $img[1];
            */

            $pro->ende_foto_pro = $request->file('imagem')->store('public');
        }

        $pro->user_id = $user['id'];
        
        $pro->save();

        return redirect()->route('item.create')->with('success', 'Produto cadastrado com sucesso');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listaDadosUser($cod_colecoes){
       /* Pega os produtos pelo id da coleção */
        $prod = Produto::where('cod_colecoes', $cod_colecoes)->get();
        $text = " por coleção";

        return view('produtos.lista-produtos', compact('prod', 'text'));
    }
}
