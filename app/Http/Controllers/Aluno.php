<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
       function professor(){
        $alunos = [
           (Object) ['nome' => 'Diogo', 'telefone'=>'123', 'email'=>'diogopaulino@gmail.com'],   
           (Object) ['nome' => 'DJoao', 'telefone'=>'756', 'email'=>'bobao@gmail.com'],   
           (Object) ['nome' => 'faustao', 'telefone'=>'198', 'email'=>'oloko@gmail.com']   
        ];

        return view('aluno', compact('alunos'));
       }
}
