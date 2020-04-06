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
    public function index()
    {
        $dado = [
            'colecao'   =>Colecao::all(),
            'categoria' =>Categoria::all()
        ];
        
        return view('produtos.produtos', $dado);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'uploadArt' => 'required'
        ],[

        ],[
            'Pnome'     => '"Nome da Obra"',
            'Descricao' => '"Descrição"',
            'preco'     => '"Preço"',
            'categoria' => '"Categoria"',
            'uploadArt' => '"Suba sua arte"'
        ]);
      
        /* Se ocorrer erro de validação, redireciona para o index com os erros e os campos ja preenchidos */
        if($valida->fails()){
            return redirect()->route('cadastro-produtos.index')->withErrors($valida)->withInput();
        }

        /* Upload de arquivo */
        if(isset($_FILES['uploadArt'])){
            if(count($_FILES['uploadArt']['tmp_name']) > 0){
                for ($i=0; $i < count($_FILES['uploadArt']['tmp_name']); $i++) { 
                    $tpArquivo = explode("/", $_FILES['uploadArt']['type'][$i]);
                    if(($tpArquivo[1] <> 'jpg') && ($tpArquivo[1] <> 'jpeg') && ($tpArquivo[1] <> 'png')){
                        return redirect()->route('cadastro-produtos.index')->with('error', 'Tipo do arquivo inválido, verifique se é arquivo "jpg, jpeg ou png')->withInput();
                    }
                    /* 
                     * Pega o diretório que está defino no arquivo app>config>filesystems.php
                     * definir no default como o ultimo parametro public
                     */
                    $diretorio = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';                    
                    $nomeArquivo = md5($_FILES['uploadArt']['name'][$i] . time() . rand(0,999)) . '.' . $tpArquivo[1];
                    move_uploaded_file($_FILES['uploadArt']['tmp_name'][$i], $diretorio . $nomeArquivo);
                }
            }
        }      

        $pro->nome_pro      = $request->input('Pnome');
        $pro->cod_categoria = $request->input('categoria');
        $pro->descricao_pro = $request->input('Descricao');
        $pro->preco_pro     = $request->input('preco');
        $pro->ende_foto_pro = $nomeArquivo;

        if(!empty($request->input('colecaoNome'))){
            $col->nome_colecao_col = $request->input('colecaoNome');
            $col->save();
            $pro->cod_colecoes = Colecao::max('id');
        }elseif($request->input('colecao') <> 0){
            $pro->cod_colecoes = $request->input('colecao');
        }else{
            return redirect()->route('cadastro-produtos.index')->with('error', 'Coleção inválida, selecione ou crie sua coleção')->withInput();
        }

        $pro->save();

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
}
