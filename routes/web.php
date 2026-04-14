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

    route::prefix('/aluno')->group(function(){
        route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
        route::post('/adicionar', [App\Http\Controllers\AlunoController::class, 'adicionar'])->name('aluno.adicionar');
        route::post('/remover', [App\Http\Controllers\AlunoController::class, 'remover'])->name('aluno.remover');
        route::post('/atualizar', [App\Http\Controllers\AlunoController::class, 'atualizar'])->name('aluno.atualizar');
        route::get('/consultar', [App\Http\Controllers\AlunoController::class, 'consultar'])->name('aluno.consultar');

    });




