<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index () {
        return view('aluno.index');
    }

    function adicionar (Request $dados ) {
        $aluno = new \app\Models\AlunoModel();
        $aluno::create($dados->all());
        return view('aluno.index', ['suceeso' => 'Aluno Cadastrado! ']);

    function remover ( ) {

    }
    function atualizar ( ) {

    }
    function consultar ( ) {
    }
    
    }

}
