<?php


$json_str = '{"funcionarios": '.
            '[{"nome": "Jason Jones", "idade": 38, "sexo": "M", "dependentes":["Edna Jones",
            "Ian Jones"]}, '.
            '{"nome": "Maria Paulina", "idade": 35, "sexo": "F"},'.
            '{"nome": "Marcílio Silva", "idade": 26, "sexo": "M"}'.
            '],
            "data": "16/03/2023"
}';

//faz o arsing da string criando o array funcionários.
$jsonObj = json_decode($json_str);

$func = $jsonObj->funcionarios;
echo "<b>data do arquivo</b>: $jsonObj->data<br>";

foreach($func as $e) {
    echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>";

    if(property_exists($e, "dependentes")) {
        $deps = $e->dependentes;
        echo "dependentes: <br>";
        
        foreach($deps as $d) {
            echo "- $d<br>";
        }
    }
}









?>