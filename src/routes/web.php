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

Route::get('/home', function () {
    return view('welcome');
})->name("home");

Route::get('/', function () {
    return view('welcome');
});


Route::get("/login", function(){
    return view("user/login");
})->name("user.login");

Route::get("/register", function(){
    return view("user/register");
})->name("user.register");


Route::get("/profile/{user_id}",['uses' =>'ProfileController@index', 'as'=>'profile.index']);

/* Existe duas rotas de logout GET e POST pois o ADMIN LTE usa o metodo POST para fazer logout */
Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("user.sair");
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("user.sair");
Route::post("/register/user",'Auth\RegisterController@salvar')->name("user.salvar");
Route::post("/login/user",'Auth\LoginController@logar')->name("user.logar");
Route::post("/profile/update",'ProfileController@atualizar')->name("profile.atualizar");

/* Rota para deletar coleção */
Route::get("/colecao/delete/{id}",['uses' =>'Produtos\ProdutosController@excluirColecao', 'as'=>'produtos.excluirColecao']);
Route::post("/colecao/edit/{id}",['uses' =>'Produtos\ProdutosController@editarColecao', 'as'=>'produtos.editarColecao']);

/*  Rota para Registro, Alteração e Exclusão de Produtos */
Route::resource('/item','Produtos\ProdutosController');
 
 /* Rota para mostrar os itens de cada Usuario por coleção e todos os itens de cada usuario */
Route::prefix('item-perfil')->group(function(){
    Route::get('/colecao/{cod_colecao}', 'Produtos\ProdutosController@listaArteColecao')->name('item-perfil.listaArte');
    Route::get('/usuario/{id}', 'Produtos\ProdutosController@listaArteUsuario')->name('item-perfil.listaArteUsu');
});

 /* Rotas do ADMINISTRADOR */
Route::prefix('dashboard-admin')->group(function(){
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::get('/users', 'Admin\AdminController@users')->name('admin.users');
    Route::get('/users/blocked', 'Admin\AdminController@blockedUsers')->name('admin.blockedUsers');
    Route::get('/users/block/{id}', 'Admin\AdminController@blockUsers')->name('admin.blockUsers');
    Route::get('/users/delete/{id}', 'Admin\AdminController@deleteUsers')->name('admin.deleteUsers');
    Route::get('/users/unlock/{id}', 'Admin\AdminController@unlockUsers')->name('admin.unlockUsers');
    Route::get('/users/arts/{id}', 'Admin\AdminController@listArts')->name('admin.list-arts');
});

 /* Caso não exista a rota, joga para a pagina de 404 */
Route::fallback(function(){
     return view('404/404'); 
});


