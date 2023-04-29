<?php

//cria o array associativo
$idades = array("Maria"=>38, "Meire"=>35, "Priscila"=>26);

//converte o conteúdo do array associativo para uma string JSON
$json_str = json_encode($idades);

//imprime a string JSON
echo "$json_str";







?>