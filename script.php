<?php

$categorias = []; //criando um array na variável $categorias
//criando lista de categorias (infantil, adolescente e adulto)
$categorias[] = 'infantil'; //na posição 0 infantil
$categorias[] = 'adolescente'; //na posição 1 adolescente
$categorias[] = 'adulto'; //na posição 2 adulto
// print_r($categorias); //mostrando todo o array

$nome = $_POST['nome'];
$idade = $_POST['idade'];
// var_dump($nome, $idade); //mostrando todo o array e definindo o tipo do dado

//FAZENDO AS CONDIÇÕES PARA O FORMULÁRIO

//CONDICIONAL O NOME NÃO PODE SER VAZIO
if(empty($nome)){//verifica se uma determinada string/variável tá com o valor preenchido ou não
    echo "O nome não pode ser vazio";
    return; //comandO utilizado para não executar mais linhas de código
}

//CONDICIONAL O NOME DEVE CONTER MAIS DE 3 CARACTERES
if(strlen($nome) < 3){ //contar a quantidade de caracteres que a string tem
    echo "O nome deve conter mais de 3 caracteres";
    return; //return serve para não executar o script, o script para aqui
}

//CONDICIONAL O NOME NÃO PODE TER MAIS QUE 20 CARACTERES
if(strlen($nome) > 20){
    echo "O nome é muito extenso";
    return;
}

//CONDICIONAL QUE VERIFICA SE A STRING É NUMÉRICA
if(!is_numeric($idade)){ //a exclamação é a negação do que estiver vindo após ela *se ela não for um número, ele dá o echo
    echo "Informe sua idade";
    return;
}


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