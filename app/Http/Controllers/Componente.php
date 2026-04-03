<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show(){
        $componentes = [
           (Object) ['nome' => 'PW2'],
           (Object) ['nome' => 'pam3']

        ];

        return view('componente', compact('componentes'));
       }
}
