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
    
        // tratando erros
        // erro proposital na string F em sexo.

        $json_str = '{"nome":"Maria", "idade":38, "sexo":F}';

        $obj = json_decode($json_str);

        if (json_last_error() == 0) {
            echo "Não houve erro! O parsing foi perfeito";
        } else {
            echo "<h3>Erro: <br></h3>";

            switch(json_last_error()) {

                case JSON_ERROR_DEPTH:
                    echo " - profundidade máxima excedida!";
                break;

                case JSON_ERROR_STATE_MISMATCH:
                    echo " - state mismatch!";
                break;

                case JSON_ERROR_CTRL_CHAR:
                    echo " - Caracter de controle encontrado!";
                break;

                case JSON_ERROR_SYNTAX:
                    echo " <h1>- Erro de sintaxe String JSON mal formatada!</h1>";
                break;

                case JSON_ERROR_UTF8:
                    echo " - Ero na codificação UTF-8!";
                break;

                default:
                    echo " - Erro desconhecido";
                break;
            }
        }
    
    
    
    
    
    
    
    ?>
</body>
</html>