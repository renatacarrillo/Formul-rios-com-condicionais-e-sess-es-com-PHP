<?php

$categorias = []; //criando um array na variável $categorias
//criando lista de categorias (infantil, adolescente e adulto)
$categorias[] = 'infantil'; //na posição 0 infantil
$categorias[] = 'adolescente'; //na posição 1 adolescente
$categorias[] = 'adulto'; //na posição 2 adulto

// print_r($categorias); //mostrando todo o array

$nome = 'Renata';
$idade = '23';

// var_dump($nome, $idade); //mostrando todo o array e definindo o tipo do dado

if($idade >= 0 && $idade <= 12){
//criando o laço de repetição onde o $i representa o índice se inicia na primeira posição
//o comando count() conta o número de elementos de uma variável, ou propriedades de um objeto
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome." compete na categoria infantil";
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome." compete na categoria adolescente";
    }
}else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome." compete na categoria adulto";
    }
}

?>