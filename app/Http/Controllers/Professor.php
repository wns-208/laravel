<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $professores = [
           (Object) ['nome' => 'bill', 'telefone'=>'568567'],   
           (Object) ['nome' => 'granny', 'telefone'=>'9867']   
   
        ];

        return view('professor', compact('professores'));
       }
}
