<?php

// string json contendo dados do usuário.
$json_str = '{"aluno": "Joaquim Valdes", "idade": 18, "sexo": "M"}';

// faz o parsing na string gerando um objeto PHP.
$obj = json_decode($json_str);

//imprime o conteúdo do objeto
echo "nome: $obj->aluno<br>";
echo "idade: $obj->idade<br>";
echo "sexo: $obj->sexo<br>";

echo "<hr>";

//string json (array contendo 3 elementos).
$json_str2 = '{"alunos": '.
'[{"nome": "Antônio Carlos", "idade": 22, "sexo": "M"},'.
'{"nome": "Maria Cecília", "idade": 25, "sexo": "F"},'.
'{"nome": "Laissa Veleslau", "idade": 26, "sexo": "F"}'.
']}';

// faz o parsing da string criando o array "alunos".
$jsonObj = json_decode($json_str2);
$ArrayAlunos = $jsonObj->alunos;

//navega pelos elementos do array imprimindo cada aluno
foreach($ArrayAlunos as $e) {
    echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>";
}


?>