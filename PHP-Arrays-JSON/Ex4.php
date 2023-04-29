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
    
        $idades = array("Maria"=>38, "Meire"=>35, "priscila"=>26);

        $json_str = json_encode($idades);

        echo "$json_str";
    
    
    
    ?>

</body>
</html>