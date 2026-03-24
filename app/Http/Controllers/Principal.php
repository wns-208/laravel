<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function somar(int $p1, int $p2){
        // echo "$p1 + $p2 = " . ($p1 + $p2); mostrar direto
        return view('somar', ['p1'=>$p1, 'p2'=>$p2]);
    }


    function multiplicar(int $p1, int $p2){

        return view('multiplicar', ['p1'=>$p1, 'p2' =>$p2]);
    }


function produtos(){
    $produtos =[
            "produto1" => ["id" => 1,  "nome" => "computador", "preco" => 100 ],
            "produto2" => ["id" => 2, "nome" => "teclado", "preco" => 50],
            "produto3" => ["id" => 3, "nome" => "mouse", "preco" => 30],
            "produto4" => ["id" => 4, "nome" => "monitor", "preco" => 600],
            "produto5" => ["id" => 5, "nome" => "impressora", "preco" => 350],
            "produto6" => ["id" => 6, "nome" => "notebook", "preco" => 2500],
            "produto7" => ["id" => 7, "nome" => "tablet", "preco" => 1200],
            "produto8" => ["id" => 8, "nome" => "smartphone", "preco" => 1800],
            "produto9" => ["id" => 9, "nome" => "fone de ouvido", "preco" => 150],
            "produto10" => ["id" => 10, "nome" => "caixa de som", "preco" => 200],
            "produto11" => ["id" => 11, "nome" => "webcam", "preco" => 120],
            "produto12" => ["id" => 12, "nome" => "microfone", "preco" => 220],
            "produto13" => ["id" => 13, "nome" => "cadeira gamer", "preco" => 900],
            "produto14" => ["id" => 14, "nome" => "mesa", "preco" => 400],
            "produto15" => ["id" => 15, "nome" => "HD externo", "preco" => 300],
            "produto16" => ["id" => 16, "nome" => "SSD", "preco" => 450],
            "produto17" => ["id" => 17, "nome" => "roteador", "preco" => 250],
            "produto18" => ["id" => 18, "nome" => "placa de vídeo", "preco" => 2000],
            "produto19" => ["id" => 19, "nome" => "memória RAM", "preco" => 350],
            "produto20" => ["id" => 20, "nome" => "fonte", "preco" => 280],
            "produto21" => ["id" => 21, "nome" => "cooler", "preco" => 90],
        ];

    return view('compras' , ["produtos" => $produtos]);
   }
}