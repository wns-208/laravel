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
Route::prefix('/aluno' )->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/adicionar', [App\Http\Controllers\AlunoController::class, 'adicionar'])->name('aluno.adicionar');
    Route::get('/remove/{id}', [App\Http\Controllers\AlunoController::class, 'remove'])->name('aluno.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\AlunoController::class, 'atualizar'])->name('aluno.atualizar');
    Route::post('/save', [App\Http\Controllers\AlunoController::class, 'save'])->name('aluno.save');

});

// como acessar?
//para adicionar
//www.xuxa.com.br/aluno/adicionar
//para excluir
//www.xuxa.com.br/aluno/remover
//post == sempre formulario
//get == leva a um site



/* Criando uma rota curso*/
Route::prefix('/curso')->group(function(){
    Route::get('/index', [App\Http\Controllers\CursoController::class, 'index'])->name('curso.index');
    Route::post('/adicionar}', [App\Http\Controllers\CursoController::class, 'adicionar'])->name('curso.adicionar');
    Route::get('/remove/{id}', [App\Http\Controllers\CursoController::class, 'remove'])->name('curso.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\CursoController::class, 'atualizar'])->name('curso.atualizar');
    Route::post('/save', [App\Http\Controllers\CursoController::class, 'save'])->name('curso.save');
});


// Criando uma rota professor

Route::prefix('/professor')->group(function(){
    Route::get('/index', [App\Http\Controllers\ProfessorController::class, 'index'])->name('professor.index');
    Route::post('/adicionar', [App\Http\Controllers\ProfessorController::class, 'adicionar'])->name('professor.adicionar');
    Route::get('/remove/{id}', [App\Http\Controllers\ProfessorController::class, 'remove'])->name('professor.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\ProfessorController::class, 'atualizar'])->name('professor.atualizar');
    Route::post('/save', [App\Http\Controllers\ProfessorController::class, 'save'])->name('professor.save');
});

// Criando uma rota componente

Route::prefix('/componente')->group(function(){
    Route::get('/index', [App\Http\Controllers\ComponenteController::class, 'index'])->name('componente.index');
    Route::post('/adicionar', [App\Http\Controllers\ComponenteController::class, 'adicionar'])->name('componente.adicionar');
    Route::get('/remove/{id}', [App\Http\Controllers\ComponenteController::class, 'remove'])->name('componente.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\ComponenteController::class, 'atualizar'])->name('componente.atualizar');
    Route::post('/save', [App\Http\Controllers\ComponenteController::class, 'save'])->name('componente.save');
});


// Criando uma rota administrador
Route::prefix('/administrador')->group(function(){
    Route::get('/index', [App\Http\Controllers\AdministradorController::class, 'index'])->name('administrador.index');
    Route::post('/adicionar', [App\Http\Controllers\AdministradorController::class, 'adicionar'])->name('administrador.adicionar');
    Route::get('/remove/{id}', [App\Http\Controllers\AdministradorController::class, 'remove'])->name('administrador.remove');
    Route::get('/atualizar/{id}', [App\Http\Controllers\AdministradorController::class, 'atualizar'])->name('administrador.atualizar');
    Route::post('/save', [App\Http\Controllers\AdministradorController::class, 'save'])->name('administrador.save');
});
            