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
/**nomeando rotas */
Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato',[\App\Http\Controllers\ContatoController::class,'salvar'])->name('site.contato');

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/login',function(){
    return "login";
})->name('site.login');
/*agrupando rotas*/
Route::prefix('/app')->group(function(){
Route::get('/clientes',function(){
    return "Clientes";
})->name('app.clientes');
Route::get('/fornecedores','FornecedorController@index',function(){
    return "Fornecedores";
})->name('app.fornecedores');
Route::get('/produtos',function(){
    return "Produtos";
})->name('app.produtos');});
Route::get('/rota1',function(){
    echo "teste rota 1";
})->name('site.rota1');
/*exemplos de redirecionamento de rotas*/
Route::get('/rota2',function(){
   return redirect()->route('site.rota1');
})->name('site.rota2');

/*Route::redirect('/rota2','/rota1');*/

/*rota de contigencia-fallback
*/
Route::fallback(function(){
    echo "OPS  pagina não encontrada.
    <a href=".route('site.index').">Voltar a pagina principal</a>
    ";
});


