<?php
session_start();

function setarMensagemSucesso($mensagem){
    $_SESSION['mensagem de sucesso'] = $mensagem;
}

function obterMensagemSucesso(){
    if(isset($_SESSION['mensagem de sucesso']))
        return $_SESSION['mensagem de sucesso'];

    return null;
}

function setarMensagemErro($mensagem){
    $_SESSION['mensagem de erro'] = $mensagem;
}

function obterMensagemErro(){
    if(isset($_SESSION['mensagem de erro']))
        return $_SESSION['mensagem de erro'];

    return null;
}

function removerMensagemSucesso(){
    if(isset($_SESSION['mensagem de sucesso']))
        unset($_SESSION['mensagem de sucesso']); //UNSET elimina toda e qualquer mensagem setada
    return null;
}

function removerMensagemErro(){
    if(isset($_SESSION['mensagem de erro']))
        unset($_SESSION['mensagem de erro']);
    return null;
    
}