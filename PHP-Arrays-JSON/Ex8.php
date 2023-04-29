<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        // Atribui o conteúdo para a variável $arquivo
        $arquivo = file_get_contents("cadastro.json");

        // Decodifica o formato json e etorna um objeto
        $json = json_decode($arquivo);

        $cont = 0;

        foreach($json as $registro):

        $cont++;

        echo "<div style='color:blue; font-size: 20px; border: 1px solid red; 
        margin-bottom: 10px; width: max-content; padding: 5px;'>Cliente: " 
        . $cont. " Código: ". $registro->codigo. 
        " Nome: " .$registro->nome. " Telefone: ".$registro->telefone. "<br></div>";
        endforeach;


    
    
    
    
    
    
    ?>
</body>
</html>