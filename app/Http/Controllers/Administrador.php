<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administrador extends Controller
{
  function index(){
        return view('administrador.index');
  }

  /* funcao de Adicionar */


  function add(Resquest $dados) {
    $admin = new \app\models\AdministradorModel();
    $admin::create($dados->all());
  }

  /* Funcao de Remove  */


  function remove(string $id) {
    $admin = new \App\Models\AdministradorModel();
    $admin::destroy($id);

    return view('admin.index', ['success'=>'Removido!', 'admins'=>$admin::all()]);

}

    /* funcao save */

    function save(Request $dados) {
        $admin = new \App\Models\AdministradorModel();
        $admin = $admin::find($dados->id);
        $admin->update($dados->all());

        return view('admin.index', ['success'=>'Atualizado!', 'admins'=>$admin::all()]);
    }

  /* Funcao de Atualizar  */


  function atualizar(string $id) {
    $admin = new \App\Models\AdministradorModel();
    $admin::$admin::find($id);

    return view('admin.atualizar', ['admin'=>$aluno]);

}

}
