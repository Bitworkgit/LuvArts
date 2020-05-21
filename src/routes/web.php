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
})->name("user.login");

Route::get("/register", function(){
    return view("usuario/cadastro");
})->name("user.register");

Route::get('/sobreNos', function(){
    return view('inicio/sobre');
});

Route::get("/profile/{user_id}",['uses' =>'Perfil\PerfilController@index', 'as'=>'perfil.index']);
Route::post("/profile/update",'Perfil\PerfilController@atualizar')->name("perfil.atualizar");

/* Existe duas rotas de logout GET e POST pois o ADMIN LTE usa o metodo POST para fazer logout */
Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("user.sair");
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("user.sair");
Route::post("/register/user",'Auth\RegisterController@salvar')->name("user.salvar");
Route::post("/login/user",'Auth\LoginController@logar')->name("user.logar");

/* Rota para deletar coleção */
Route::get("/colecao/delete/{id}",['uses' =>'Produto\ProdutoController@excluirColecao', 'as'=>'produto.excluirColecao']);
Route::post("/colecao/edit/{id}",['uses' =>'Produto\ProdutoController@editarColecao', 'as'=>'produto.editarColecao']);

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
Route::get('produto/remover/carrinho/{id}','Produto\ProdutoController@removerDoCarrinho')->name("produto.removerDoCarrinho");
Route::get('produto/adicionar/carrinho/{produto_id}/{comprador_id}','Produto\ProdutoController@adicionarAoCarrinho')->name("produto.adicionarAoCarrinho");


 /* Rotas do ADMINISTRADOR */
Route::prefix('dashboard-admin')->group(function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::get('/users', 'Admin\AdminController@users')->name('admin.users');
    Route::get('/users/blocked', 'Admin\AdminController@blockedUsers')->name('admin.blockedUsers');
    Route::get('/users/block/{id}', 'Admin\AdminController@blockUsers')->name('admin.blockUsers');
    Route::get('/users/delete/{id}', 'Admin\AdminController@deleteUsers')->name('admin.deleteUsers');
    Route::get('/users/unlock/{id}', 'Admin\AdminController@unlockUsers')->name('admin.unlockUsers');
    Route::get('/users/arts/{id}', 'Admin\AdminController@listArts')->name('admin.list-arts');
    Route::get('/users/admin/{id}', 'Admin\AdminController@admin')->name('admin.admin');
    Route::get('/users/del', 'Admin\AdminController@del')->name('admin.del');
    Route::get('/users/lista-adm', 'Admin\AdminController@listaAdm')->name('admin.listaAdm');
    Route::get('/luvarts/capital', 'Admin\AdminController@capitalLuvArts')->name('admin.capitalLuvArts');
    Route::get('/luvarts/estatisticas', 'Admin\AdminController@estatisticas')->name('admin.estatisticas');
    Route::get('/increment/{id}', 'Venda\VendaController@incrementar')->name("venda.incrementar");
});


Route::get('menu', function(){
    return usuario/perfil");
});

 /* Caso não exista a rota, joga para a pagina de 404 */
 Route::fallback(function(){
    return view('404/404'); 
});
