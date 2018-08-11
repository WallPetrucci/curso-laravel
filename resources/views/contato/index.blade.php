<?php
/**
 * Created by PhpStorm.
 * User: Wallace
 * Date: 11/08/2018
 * Time: 03:07
 */
?>

@extends('layout.site')
@section('titulo', 'Contatos')
@section('conteudo')
<h3>Essa é a View Contato/Index</h3>


@foreach($contatos as $contato)
    <p> <strong>{{$contato->nome }} </strong> - {{$contato->telefone }} </p>
@endforeach

    @endsection()


