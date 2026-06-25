<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{

    function index(){ 
        $professor = new \App\Models\ProfessorModel();
        return view('professor.index', ['professores'=>$professor::all()]);
    }
 
    function adicionar(Request $dados) { 

        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:250',
                  'email' => 'required|min:5|max:250',
                  'telefone' => 'required|min:14|max:14'
              ],
              [
                  'nome.required' => 'O campo Nome é obrigatório.',
                  'nome.min' => 'O campo Nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo Nome deve conter no máximo 250 caracteres.',
                  
                  'email.required' => 'O campo Email é obrigatório.',
                  'email.min' => 'O campo Email deve conter no mínimo 5 caracteres.',
                  'email.max' => 'O campo Email deve conter no máximo 250 caracteres.',

                  'telefone.required' => 'O campo Telefone é obrigatório.',
                  'telefone.min' => 'O campo Telefone deve conter no mínimo 14 caracteres.',
                  'telefone.max' => 'O campo Telefone deve conter no máximo 14 caracteres.',
              ]
              
      );

      if ($validator->fails()) {
          return redirect()
              ->route('professor.index')
              ->withErrors($validator)
              ->withInput();
      }

        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());

        $professores = new \App\Models\ProfessorModel();

        return view('professor.index', ['success'=>'Cadastrado!', 'professores'=>$professores::all()]);
    }

    function remove(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor::destroy($id);

        return view('professor.index', ['success'=>'Removido!', 'professores'=>$professor::all()]);

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

        return view('professor.index', ['success'=>'Atualizado!', 'professores'=>$professor::all()]);
    }

}