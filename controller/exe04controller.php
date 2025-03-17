<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de imposto de renda</title>
</head>
<body>
    <h1> Calculadora de imposto de renda </h1>

    <?php

    $salario = floatval($_REQUEST['salario']);

    if ($salario <= 2259.20) {
        echo "Isento de imposto e sem parcelas";
    } elseif ($salario >= 2259.21 && $salario <= 2828.65) {
        $taxa_imposto = ($salario * 0.075) - 169.44;
        echo "A taxa de imposto é {$taxa_imposto}";
    } elseif ($salario >= 2828.66 && $salario <= 3751.05) {
        $taxa_imposto = ($salario * 0.15) - 381.44;
        echo "A taxa de imposto é {$taxa_imposto}";
    } elseif ($salario >= 3751.06 && $salario <= 4664.68) {
        $taxa_imposto = ($salario * 0.225) - 662.77;
        echo "A taxa de imposto é {$taxa_imposto}";
    } else{
        $taxa_imposto = ($salario * 0.275) - 896.00;
        echo "A taxa de imposto é {$taxa_imposto}";

    }

    ?>
    
</body>
</html>