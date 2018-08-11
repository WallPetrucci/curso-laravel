<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ContatoModel;

class ContatoController extends Controller
{
    public function index(){

        $contatos = [
            (object) ['nome'=>'Wallace', 'telefone'=>"123123"],
            (object) ['nome'=>'Larissa', 'telefone'=>"567567"]
        ];

        $contato = new ContatoModel();
        // $contato->lista()->nome;
        $con = $contato->lista();
        dd($con->nome);
        return view('contato.index', compact('contatos'));
    }
    public function criar(Request $req){
        dd($req->all());
        return "Esse é o Criar do Controller";
    }
    public function editar(){
        return "Esse é o Editar do Controller";
    }
}
