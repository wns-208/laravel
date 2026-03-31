<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
   function show(){
    $cursos = [
        (object) ['nome'=>'Ds', 'horario'=>'1315654'],
        (object) ['nome'=>'ADM', 'horario'=>'6574643'],
    ];

    return view('curso', compact('cursos'));
   }
}
