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
    
        $empregados = array("empregados"=>array(
            array(
            "nome"=>"Jason Jones",
            "idade"=>38,
            "sexo"=>"M"
            ), 
            array(
                "nome"=>"Ada Pascalina",
                "idade"=>36,
                "sexo"=>"F"
            ),
            array(
                "nome"=>"Delphino Da Silva",
                "idade"=>26,
                "sexo"=>"M"
            )
            ));
    
            
            $json_str = json_encode($empregados);

            echo "$json_str";


            


    ?>
</body>
</html>