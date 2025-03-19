<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculadora de Tarifas de Energia </title>
</head>
<body>
    <h1>  Calculadora de Tarifas de Energia </h1>
    
    <?php
    $consumo = intval($_REQUEST["consumo"]);
    
    if ($consumo > 500) {
        $tarifa = 0.80;
        echo "Consumo alto: R$ " . number_format($tarifa,2) . " por kW";
    
    } elseif ($consumo > 100) {
        $tarifa = 0.70;
        echo "Consumo médio: R$ " . number_format($tarifa,2) . " por kW";
    
    } else {
        $tarifa = 0.60;
        echo "Consumo baixo: R$ " . number_format($tarifa,2) . " por kW";
    }

$valor_final = $consumo * $tarifa;
echo "<br> Total a pagar: R$ " . number_format($valor_final,2);

?>

    
</body>
</html>