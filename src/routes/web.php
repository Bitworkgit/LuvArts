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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name("user.sair");
Route::post("/register/user",'Auth\RegisterController@salvar')->name("user.salvar");
Route::post("/login/user",'Auth\LoginController@logar')->name("user.logar");