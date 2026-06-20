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


    Route::get('/', [App\Http\Controllers\PersonaController::class, 'index']);
    Route::prefix('/Persona' )->group(function(){
    Route::get('/index', [App\Http\Controllers\PersonaController::class, 'index'])->name('persona.index');// Nome do arquivo sem a extensão .blade.php
    });



/* Usado para criar grupos */
use App\Http\Controllers\AdministradorController;

Route::prefix('/administrador' )->group(function(){
    Route::get('/index', [App\Http\Controllers\AdministradorController::class, 'index'])->name('administrador.index');
    Route::post('/adicionar', [App\Http\Controllers\AdministradorController::class, 'adicionar'])->name('administrador.adicionar');
    Route::post('/remover', [App\Http\Controllers\AdministradorController::class, 'remover'])->name('administrador.remover');
    Route::post('/atualizar', [App\Http\Controllers\AdministradorController::class, 'atualizar'])->name('administrador.atualizar');
    Route::get('/consultar', [App\Http\Controllers\AdministradorController::class, 'consultar'])->name('administrador.consultar');

});



// como acessar?
//para adicionar
//www.xuxa.com.br/aluno/adicionar
//para excluir
//www.xuxa.com.br/aluno/remover
//post == sempre formulario
//get == leva a um site






