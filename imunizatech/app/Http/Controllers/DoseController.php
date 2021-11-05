<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoseController extends Controller
{
    

    public function index() {
        $nome = "Lucas";
        $idade = 25;

        $arr = [10,20,30,40,50];

        $nomes = ["Lucas", "Maria", "João", "Paulo"];

        return view('welcome',
            [
                'nome' => $nome,
                'idade2' => $idade,
                'profissao' => "Programador",
                'arr' => $arr,
                'nomes' => $nomes
            ]
            );
    }

    public function create() {
        return view('doses.create');
    }
}
