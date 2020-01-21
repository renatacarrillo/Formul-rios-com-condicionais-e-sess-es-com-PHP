<?php
include "./servicos/servicoMensagemSessao.php";
include "./servicos/servicoCategoriaCompetidor.php";
include "./servicos/servicoValidacao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];
// var_dump($nome, $idade); //mostrando todo o array e definindo o tipo do dado

defineCategoriaCompetidor($nome, $idade);
header('location: index.php');
