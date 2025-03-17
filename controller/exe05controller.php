<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Classificação de Produtos</title>
</head>
<body>
    <h1> Sistema de Classificação de Produtos </h1>

    <?php

    $produto = strval($_REQUEST['produto']);

    if ($produto == "celular" || $produto == "alexa" || $produto == "notebook"){
        echo "Categora: eletrônicos";
    } elseif ($produto == "camiseta" || $produto == "tênis" || $produto == "short") {
        echo "Categora: vestuária";
    } elseif ($produto == "carne" || $produto == "macarrão" || $produto == "arroz") {
        echo "Categora: alimentos";
    } else{
        echo "Sem categoria";
    }
    ?>
    
</body>
</html>