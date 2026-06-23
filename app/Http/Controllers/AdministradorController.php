<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdministradorController extends Controller
{
    function index(){ 
 

      if ($validator->fails()) {
          return redirect()
              ->route('administrador.index')
              ->withErrors($validator)
              ->withInput();
      }
        $administrador = new \App\Models\AdministradorModel();

        return view('administrador.index', ['administradores'=>$administrador::all()]);
    }

    function adicionar (Request $dados) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador::create($dados->all());

               $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'email' => 'required|min:255|max:255,',
                  'telefone' => 'required|min:11|max:11',
                  'cpf' => 'required|min:11|max:11',
                  'usuario' => 'required|min:255|max:255',
                  'senha' => 'required|min:255|max:255',
                  'status' => 'required|min:50|max:50'

              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
              ]
      );

        //Recuperando todos os administradors do banco e enviando para A View

        $administrador = new \App\Models\AdministradorModel();

        return view('administrador.index', ['sucesso'=>'Cadastrado!', 'administradores' =>$administradores::all()]);
    
    }

    function remove(string $id) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador::destroy($id);

        return view('administrador.index', ['success'=>'Removido!', 'administradores'=>$administrador::all()]);

    }

    function save(Request $dados) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador = $administrador::find($dados->id);
        $administrador->update($dados->all());

        return view('administrador.index', ['success'=>'Atualizado!', 'administradores'=>$administrador::all()]);
    }
}
