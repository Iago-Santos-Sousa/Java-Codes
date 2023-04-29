<?php
include "conexao.php";
include "funcoes.php";

if ($usuario=verificaUsuarioLogado()){
    
} else {
    header('Location: login.php');   
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <?php cabecalho($usuario); ?>
    <h1>Agenda</h1>
    <?php

    $sql = 'select id_pessoa, ds_nome, ds_email from tb_pessoa';

    $statement = $pdo->prepare($sql);
    $statement->execute();
    $linhas = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <p><a href="login.php">Voltar á página de login.</a></p>
</body>
</html>