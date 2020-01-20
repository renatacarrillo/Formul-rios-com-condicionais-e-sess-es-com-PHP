<?php
session_start();

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
    $_SESSION['mensagem de erro'] = "O nome não pode ser vazio"; //$_SESSION array associativo
    // return; //comandO utilizado para não executar mais linhas de código
    header('location: index.php');
    return;
}

//CONDICIONAL O NOME DEVE CONTER MAIS DE 3 CARACTERES
else if(strlen($nome) < 3){ //contar a quantidade de caracteres que a string tem
    $_SESSION['mensagem de erro'] = "O nome deve conter mais de 3 caracteres";
    // return; //return serve para não executar o script, o script para aqui
    header('location: index.php');
    return;
}

//CONDICIONAL O NOME NÃO PODE TER MAIS QUE 20 CARACTERES
else if(strlen($nome) > 20){
    $_SESSION['mensagem de erro'] = "O nome é muito extenso";
    return;
}

//CONDICIONAL QUE VERIFICA SE A STRING É NUMÉRICA
else if(!is_numeric($idade)){ //a exclamação é a negação do que estiver vindo após ela *se ela não for um número, ele dá o echo
    $_SESSION['mensagem de erro'] = "Informe sua idade";
    header('location: index.php');
    return;
}


if($idade >= 0 && $idade <= 12){
//criando o laço de repetição onde o $i representa o índice se inicia na primeira posição
//o comando count() conta o número de elementos de uma variável, ou propriedades de um objeto
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
            header('location:index.php');
            return;
        }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
        $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria".$categorias[$i];
        header('location:index.php');
        return;
    }
}else{
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
        $_SESSION['mensagem de sucesso'] = "O nadador ".$nome." compete na categoria".$categorias[$i];
        header('location:index.php');
        // return;
    }
}

?>