<?php
    $host= "localhost";
    $dbname="agenda";
    $user= "root";
    $pass= "senac";

    try{
        $conn= new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
        //ativa o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "<h1 style='color: green; font-size: 20px; text-align: center'>conexão bem sucedida!</h1>";
    }

    catch(PDOException $e){
        $erro= $e->getMessage();
        echo $erro;
        echo "<h1 style='color: red; font-size: 20px; text-align: center'>deu ruim!</h1>";
    }
?>