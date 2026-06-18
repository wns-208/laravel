<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function index(){ 
        return view('professor.index');
    }

    function add(Request $dados) { 
        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());

				//RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
				
        $professores = new \App\Models\ProfessorModel();

        return view('professor.index', ['success'=>'Cadastrado!', 'professores'=>$professores::all()]);
    }
    function atualizar(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($id);

        return view('professor.atualizar', ['professor'=>$professor]);
    }

    function save(Request $dados) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($dados->id);
        $professor->update($dados->all());

        return view('professor.index', ['success'=>'Atualizado!', 'professor'=>$professor::all()]);
    }
}