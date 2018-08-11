<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        return "Esse é o index do Controller";
    }
    public function criar(Request $req){
        dd($req->all());
        return "Esse é o Criar do Controller";
    }
    public function editar(){
        return "Esse é o Editar do Controller";
    }
}
