<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;

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

// Rotas básicas
// Route::view('/', 'welcome');
// Route::view('/teste','teste');

// Redirecionamento de rota
// Route::redirect('/' ,'/teste');

/*
// Rotas com parâmetros (dinâmicas)
Route::get('/noticia/{slug}', function ($slug) {
    echo "Slug: ".$slug;
});
Route::get('/noticia/{slug}/comentario/{id}', function ($slug, $id){
    echo "Mostrando o comentátio ".$id." Da noticia ".$slug;
});
*/

/*
// Rotas com Regex + Provider
Route::get('/user/{name}', function($name) {
    echo "Mostrando usuário de NOME " . $name;
})->where('name', '[a-z]+');
Route::get('/user/{id}', function($id) {
    echo "Mostrando usuário de ID " . $id;
});
*/

/*
// Rotas com nome + redirect
Route::get('/config', function() {
    // $link = route('info');
    // echo "Link: " . $link;
    return redirect()->route('permissoes');
    return view('config');
});
Route::get('/config/permissoes', function() {
    echo "Configurações PERMISSÕES";
})->name('info');
Route::get('/config/info', function() {
    echo "Configurações INFO";
})->name('permissoes');
*/

/*
// Grupo de rotas
Route::prefix('/config')->group( function () {
    Route::get('/' , function () {
        return view('config');
    });
    Route::get('info', function () {
        echo "Configurações de INFO 2";
    });
    Route::get('permissoes', function () {
        echo "Configurações de PERMISSÕES 2";
    });
});
*/

/*
// Fallback
Route::prefix('/config')->group( function () {
    Route::get('/' , function () {
        return view('config');
    });
    Route::get('info', function () {
        echo "Configurações de INFO 2";
    });
    Route::get('permissoes', function () {
        echo "Configurações de PERMISSÕES 2";
    });
});
Route::fallback(function(){
    return view('404');
});
*/

/*
// Rotas com controller
Route::get('/config', [ConfigController::class, 'index']);
Route::get('/config/user', [ConfigController::class, 'user']);
Route::get('/', [HomeController::class, 'index']);
*/