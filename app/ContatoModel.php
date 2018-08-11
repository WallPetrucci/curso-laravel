<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    //
    public function lista(){
        return (object)[
            'nome'      => 'Wallace',
            'telefone'  => '123123123'
        ];
    }

}
