<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Home\HomeController@index')->name("home");

Route::redirect('/home', '/');

Route::get("/login", function(){
    return view("usuario/login");
})->name("usuario.login");

Route::get("/registrar", function(){
    return view("usuario/cadastro");
})->name("usuario.registrar");

Route::get('/sobreNos', function(){
    return view('inicio/sobre');
})->name('sobre');

Route::get("/perfil/{usuario_id}",['uses' =>'Perfil\PerfilController@index', 'as'=>'perfil.index']);
Route::post("/perfil/atualizar",'Perfil\PerfilController@atualizar')->name("perfil.atualizar");

/* Existe duas rotas de logout GET e POST pois o ADMIN LTE usa o metodo POST para fazer logout */
Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("usuario.sair");
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("usuario.sair");
Route::post("/registrar/usuario",'Auth\RegisterController@salvar')->name("usuario.salvar");
Route::post("/login/usuario",'Auth\LoginController@logar')->name("usuario.logar");

/* Rota para deletar coleção */
Route::delete("/colecao/deletar",['uses' =>'Produto\ProdutoController@excluirColecao', 'as'=>'produto.excluirColecao']);
Route::post("/colecao/editar/{id}",['uses' =>'Produto\ProdutoController@editarColecao', 'as'=>'produto.editarColecao']);

/*  Rota para Registro, Alteração e Exclusão de Produtos */
Route::resource('/item','Produto\ProdutoController');
Route::get('/pesquisa/{pesquisa?}/{ordem?}', 'Produto\ProdutoController@pesquisa')->name('pesquisar');

Route::get('/categoria/{categoria_id}/{ordem?}/{pesquisa?}', 'Produto\ProdutoController@categoria')->name('pesquisar.categoria');

 /* Rota para mostrar os itens de cada Usuario por coleção e todos os itens de cada usuario */
Route::prefix('item-perfil')->group(function(){
    Route::get('/colecao/{cod_colecao}', 'Produto\ProdutoController@listaArteColecao')->name('item-perfil.listaArte');
    Route::get('/usuario/{id}', 'Produto\ProdutoController@listaArteUsuario')->name('item-perfil.listaArteUsu');
});

Route::get('produto/comprar/{id}','Produto\ProdutoController@comprarProduto')->name("produto.comprar");
Route::delete('produto/remover/carrinho/{id?}','Produto\ProdutoController@removerDoCarrinho')->name("produto.removerDoCarrinho");
Route::put('produto/adicionar/carrinho/{produto_id}/{comprador_id}','Produto\ProdutoController@adicionarAoCarrinho')->name("produto.adicionarAoCarrinho");

 /* Rotas do ADMINISTRADOR */
Route::prefix('painel-admin')->group(function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::get('usuarios', 'Admin\AdminController@usuarios')->name('admin.usuarios');
    Route::get('usuarios/bloqueados', 'Admin\AdminController@usuariosBloqueado')->name('admin.usuariosBloqueado');
    Route::put('usuarios/bloquear/{id}', 'Admin\AdminController@bloquearUsuario')->name('admin.bloquearUsuario');
    Route::put('usuarios/deletar/{id}', 'Admin\AdminController@deletarUsuario')->name('admin.deletarUsuario');
    Route::put('usuarios/desbloquear/{id}', 'Admin\AdminController@desbloquearUsuario')->name('admin.desbloquearUsuario');
    Route::get('usuarios/artes/{id}', 'Admin\AdminController@listaArte')->name('admin.listaArte');
    Route::get('usuarios/admin/{id}', 'Admin\AdminController@admin')->name('admin.admin');
    Route::get('usuarios/del', 'Admin\AdminController@usuariosExcluido')->name('admin.usuariosExcluido');
    Route::get('usuarios/lista-adm', 'Admin\AdminController@listaAdm')->name('admin.listaAdm');
    Route::get('/luvarts/capital', 'Admin\AdminController@capitalLuvArts')->name('admin.capitalLuvArts');
    Route::get('/luvarts/estatisticas', 'Admin\AdminController@estatisticas')->name('admin.estatisticas');
    Route::put('/incrementar/{id}', 'Venda\VendaController@incrementar')->name("venda.incrementar");
});

 /* Caso não exista a rota, joga para a pagina de 404 */
 Route::fallback(function(){
    return view('404/404'); 
});
