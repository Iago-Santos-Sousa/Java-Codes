<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            height: 100vh;
        }

        div {
            width: max-content;
            border: 1px solid;
            padding: 10px;
            background: green;
            margin: 5px auto;
            color: white;
        }

        table, td, th {
            border: 1px solid;
        }

        table, td, th {
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
            padding: 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php

        $name = $_GET["name"];
        $DtNasc = $_GET["Dt-nasc"];
        $address = $_GET["address"];
        $course = $_GET["course"];
        $registration = $_GET["registration"];
    
        $cadastro = ["Nome" =>$name, "DataNascimento"=>$DtNasc, "Endereco"=>$address, "Curso"=>$course, "Matricula"=>$registration];

        $dados_json = json_encode($cadastro);
        $FileOpen = fopen("cadastro.json", "w");

        $escreve = fwrite($FileOpen, $dados_json);
        fclose($FileOpen);        

        $arquivo = file_get_contents('cadastro.json');
        $arquivoJson = json_decode($arquivo);

        echo "<div>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Nome</th><th>Data de nascimento</th><th>Endereço</th><th>Curso</th><th>Matrícula</th>";
        echo "</tr>";
        echo "<tr>";
        foreach($arquivoJson as $x=>$value):
            echo "<td>";
            
                echo $value;
                
            echo "</td>";
            
        endforeach;
        echo "</tr>";
        echo "</table>";
        echo "</div>";
    
    ?>
</body>
</html>





		
		
    
