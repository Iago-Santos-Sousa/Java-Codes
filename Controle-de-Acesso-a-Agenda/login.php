<?php 
    include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
  <h1 style="text-align: center;">Agenda</h1>
  <div class="container">
    <div class="form">
      <?php
        if (!isset($_POST["bt_sub"])) {
      ?>
        <form  action="" method="POST">
          <label for="email">E-mail</label>
          <input type="text" name="ds_email" id="email">
          <br>
          <label for="senha">Senha</label>
          <input type="password" name="ds_senha" id="senha">
          <br>
          <input type="submit" name="bt_sub" value="Login" id="myButton">
        </form>
      </div>
  </div>
   

    <?php

    } else {
      $ds_email = $_POST["ds_email"];
      $ds_senha = md5($_POST["ds_senha"]);
# echo $ds_senha."<br>";
# echo $ds_email."<br>";
  
      try {

            $sql = 'select ds_nome from tb_pessoa where ds_email = :ds_email and ds_senha = :ds_senha';

            $statement = $pdo->prepare($sql);
            $statement->bindParam(':ds_email', $ds_email);
            $statement->bindParam(':ds_senha', $ds_senha);
            $statement->execute();
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            # print_r($row);
            if ($statement->rowCount()>0) {
                setcookie("usuario", $row["ds_nome"]);
                setcookie("ts_login", time());
                header('Location: index.php');
            } else {
              echo "<p>Usuário/Senha inválido</p>";
              echo "<p>Tente novamente</p>";
              echo "<p><a href='login.php'>Ir para tela de login</a></p>";
            }
        } catch(PDOException $e) {
          echo 'Erro: ' . $e->getMessage();
        }
    }

    ?>
    
</body>
</html>