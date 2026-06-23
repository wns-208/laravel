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

    function adicionar(Request $dados ) {
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'email' => 'required|min:12|max:255',
                  'telefone ' => 'required|min:11|max:11'
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.'
              ],
              [
                    'email.required' => 'O campo email é obrigatorio.',
                    'email.min' => 'O campo email deve ter no mínimo 11',
                    'email.max' => 'O campo email deve ter no máximo 255',
              ],
              [
                    'telefone.required' => 'O campo telefone é obrigatorio.',
                    'telefone.min' => 'O campo telefone deve ter no mínimo 1',
                    'telefone.max' => 'O campo telefone deve ter no máximo 11',
              ]
      );

      if ($validator->fails()) {
          return redirect()
              ->route('professor.index')
              ->withErrors($validator)
              ->withInput();
      }
            $professor = new \App\Models\ProfessorModel;
            $professor::create($dados->all());
            
            $professor = new \App\Models\ProfessorModel();
        
  
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