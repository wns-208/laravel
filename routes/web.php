<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);


/* Usado para criar grupos */
Route::prefix('/persona' )->group(function(){
    Route::get('/index', [App\Http\Controllers\PersonaController::class, 'index'])->name('persona.index');
    Route::post('/adicionar', [App\Http\Controllers\PersonaController::class, 'adicionar'])->name('Persona.adicionar');
    Route::post('/remover', [App\Http\Controllers\PersonaController::class, 'remover'])->name('Persona.remover');
    Route::post('/atualizar', [App\Http\Controllers\PersonaController::class, 'atualizar'])->name('Persona.atualizar');
    Route::get('/consultar', [App\Http\Controllers\Principal::class, 'principal'])->name('Persona.consultar');

});

// como acessar?
//para adicionar
//www.xuxa.com.br/aluno/adicionar
//para excluir
//www.xuxa.com.br/aluno/remover
//post == sempre formulario
//get == leva a um site






