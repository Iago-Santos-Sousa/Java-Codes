<?php

    include_once("../config/url.php");
    include_once("../config/processamento.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?=$BASE_URL?>/../css/style.css">


    <!-- <link rel="stylesheet" href="../css/style.css"> -->

    <title>Document</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?= $BASE_URL?>/index.php">
            <img src="<?= $BASE_URL?>/../img/logo.jpeg" alt="Agenda" style="width: 60px;">
        </a>
        <div>
            <div class="navbar-nav">
                <a class="nav-link active" href="<?= $BASE_URL?>/index.php">Agenda</a>
                <a class="nav-link active" href="<?= $BASE_URL?>/create.php">Adicionar
                Contato</a>
               
            </div>
        </div>
    </nav>

</header>