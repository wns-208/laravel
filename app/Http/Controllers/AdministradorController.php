<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
  function index(){
        return view('administrador.index');
  }

  /* funcao de Adicionar */


  function adicionar(Request $dados) {
    $administrador = new \App\models\AdministradorModel();
    $administrador::create($dados->all());
  }

  /* Funcao de Remove  */


  function remover(string $id) {
    $administrador = new \App\Models\AdministradorModel();
    $administrador::destroy($id);

    return view('administrador.index', ['success'=>'Removido!', 'admins'=>$administrador::all()]);

}

    /* funcao save */

    function save(Request $dados) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador = $administrador::find($dados->id);
        $administrador->update($dados->all());

        return view('administrador.index', ['success'=>'Atualizado!', 'admins'=>$administrador::all()]);
    }

  /* Funcao de Atualizar  */


  function atualizar(string $id) {
    $administrador = new \App\Models\AdministradorModel();
    $administrador = $administrador::find($id);

    return view('administrador.atualizar', ['admins'=>$administrador]);
  }
}

