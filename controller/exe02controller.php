<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de desconto</title>
</head>
<body>
    <h1> Calculadora de desconto</h1>

    <?php

    $preco = floatval($_REQUEST['preco']);

    if($preco >  200){
        $desconto = $preco * 0.15;
        $preco_final = $preco - $desconto;
        echo "Preço com desconto{$preco_final}";
    } else{
        echo "Produto sem desconto {$preco_final}";
    }



    ?>
    
</body>
</html>