@extends('layouts.app')
@section('title','Search Gifs')
@section('content')

<div class="row">
	<div class="col-md-12">
<?php 
//Criamos uma função que irá retornar o conteúdo do arquivo.
function ler(){
//Variável arquivo armazena o nome e extensão do arquivo. 
$arquivo = "log/FindAGif.html"; 
//Variável $fp armazena a conexão com o arquivo e o tipo de ação. 
$fp = fopen($arquivo, "r"); 
//Lê o conteúdo do arquivo aberto. 
$conteudo = fread($fp, filesize($arquivo));
$conteudo = str_replace("[", "",$conteudo);
$conteudo = str_replace("]", "",$conteudo);
//Fecha o arquivo. 
fclose($fp); 
//retorna o conteúdo. 
return $conteudo; 
} 
echo ler(); 
?> 
</div>
</div>

@endsection