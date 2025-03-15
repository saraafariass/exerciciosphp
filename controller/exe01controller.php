<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de paridade</title>
</head>
<body>
    <h1> Verificador de paridade</h1>

    <?php

    $valor = intval($_REQUEST['valor']);

    if($valor % 2 == 0){
        echo "O valor é par {$valor}";
    } else{
        echo "O valor é impar {$valor}";
    }



    ?>
    
</body>
</html>