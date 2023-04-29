<?php

$database = "agenda";
$servername = "localhost";
$username = "root";
$password = "senac";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$database;", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão bem sucedida, aproveite.";
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}

?>