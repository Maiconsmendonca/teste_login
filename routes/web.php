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

Route::get('/{erro?}', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/', [\App\Http\Controllers\LoginController::class, 'autenticar'])->name('login');

Route::middleware('autenticacao:padrao')->prefix('/app')->group(/**
 *
 */ function (){
   Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
   Route::get('/sair', [\App\Http\Controllers\LoginController::class, 'sair'])->name('sair');
   Route::get('/cadastro', [\App\Http\Controllers\ClienteController::class, 'index'])->name('cadastro');
   Route::post('/cadastrar', [\App\Http\Controllers\ClienteController::class, 'cadastrar'])->name('cadastrar');
   Route::get('/listar', [\App\Http\Controllers\ClienteController::class, 'listar'])->name('listar');
   Route::post('/cliente/listar/localizar', [\App\Http\Controllers\ClienteController::class, 'localizar'])->name('localizar');
   Route::get('/cliente/editar/{id}', [\App\Http\Controllers\ClienteController::class, 'editar'])->name('editar');
   Route::post('/editar/confirmar', [\App\Http\Controllers\ClienteController::class, 'confirmar'])->name('confirmar');
   Route::get('/cliente/excluir/{id}', [\App\Http\Controllers\ClienteController::class, 'excluir'])->name('excluir');
});
