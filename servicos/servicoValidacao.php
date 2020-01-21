<?php
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
?>