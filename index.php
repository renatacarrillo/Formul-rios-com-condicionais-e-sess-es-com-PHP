<?php 
    session_start(); //inicia a sessão php, no caso persiste o estado da sessão
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Inscrição</title>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php 
        $mensagem_de_sucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : ''; //se minha sessão da chave 'mensagem de erro' tiver um valor iniciado, atribui ele para a variável $mensagem_de_erro e o *?* executa o if *:* se não (else)
        if(!empty($mensagem_de_sucesso)){
        echo $mensagem_de_sucesso;
        }

        $mensagem_de_erro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : ''; //se minha sessão da chave 'mensagem de erro' tiver um valor iniciado, atribui ele para a variável $mensagem_de_erro e o *?* executa o if *:* se não (else)
        if(!empty($mensagem_de_erro)){
        echo $mensagem_de_erro;
        }   
    ?>

    <p>Seu nome: <input type="text" name="nome"></p>
    <p>Sua idade: <input type="text" name="idade"></p>
    <p><input type="submit" value="ENVIAR DADOS DO COMPETIDOR"></p>
</form>

</body>

</html>
