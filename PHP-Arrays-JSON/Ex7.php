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
    
        $cliente = array(
            "codigo"=>"001",
            "nome"=>"William",
            "telefone"=>"012 9999-6834"
        );

        $cliente2 = array(
            "codigo"=>"002",
            "nome"=>"Adriano",
            "telefone"=>"61 9996-8967"
        );

        $cliente3 = array(
            "codigo"=>"003",
            "nome"=>"Maria",
            "telefone"=>"013 9978-5678"
        );


        // Atribui os três arrays em apenas um
        $dados = array($cliente, $cliente2, $cliente3);

        // transforma o array em json
        $dados_json = json_encode($dados);

        //cria e abre arquivo em json, o parametro a sera para abrir em escrita
        $fp = fopen("cadastro.json", "a");

        // escreve o conteúdo json no arquivo
        $escreve = fwrite($fp, $dados_json);

        // fecha arquivo
        fclose($fp);

    
    
    
    
    
    
    ?>
</body>
</html>