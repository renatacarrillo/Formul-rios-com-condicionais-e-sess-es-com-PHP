<?php

//FAZENDO AS CONDIÇÕES PARA O NOME
function validaNome($nome){

//CONDICIONAL O NOME NÃO PODE SER VAZIO
if(empty($nome)){//verifica se uma determinada string/variável tá com o valor preenchido ou não
    setarMensagemErro('O nome não pode ser vazio, por favor preencha novamente');
    // return; //comandO utilizado para não executar mais linhas de código
    return false;
}

//CONDICIONAL O NOME DEVE CONTER MAIS DE 3 CARACTERES
else if(strlen($nome) < 3){ //contar a quantidade de caracteres que a string tem
    setarMensagemErro('O nome não pode conter menos que 3 caracteres, por favor preencha novamente');
    // return; //return serve para não executar o script, o script para aqui
    return false;
}

//CONDICIONAL O NOME NÃO PODE TER MAIS QUE 20 CARACTERES
else if(strlen($nome) > 20){
    setarMensagemErro('O nome não pode conter mais que 20 caracteres, por favor preencha novamente');
    return false;
}
    return true;
}


//FAZENDO AS CONDIÇÕES PARA A IDADE
function validaIdade($idade){

    if(!is_numeric($idade)){ //a exclamação é a negação do que estiver vindo após ela *se ela não for um número, ele dá o echo
        setarMensagemErro('Informe um número para a Idade');
        return false;
        }
        return true;
}

?>