<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Bilhetagem Eletrônica</title>
</head>
<body>
    <h1> Sistema de Bilhetagem Eletrônica </h1>

    <?php

    $idade = intval($_REQUEST['idade']);
    $preco_passagem = 5.00;

    if ($idade >= 60) {
        $precoFinal = $preco_passagem * 0.60; // 40% de desconto
        echo "Categoria: Idoso | Preço: R$ " . number_format($precoFinal, 2);
    } elseif ($idade >= 6 && $idade <= 18) {
        $precoFinal = $preco_passagem * 0.50; // 50% de desconto
        echo "Categoria: Estudante | Preço: R$ " . number_format($precoFinal, 2);
    } else {
        echo "Categoria: Tarifa Normal | Preço: R$ " . number_format($preco_passagem, 2);
    }




    ?>

</body>
</html>