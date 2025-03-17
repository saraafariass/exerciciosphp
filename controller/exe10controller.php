
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Reservas de Hotel</title>
</head>
<body>
    <h1>Reservas de Hotel</h1>

    <?php
    $nome = strval($_REQUEST['nome']);
    $quarto = $_REQUEST['quarto'];
    $temporada = $_REQUEST['temporada'];
    $dias = intval($_REQUEST['dias']);
    
    if ($quarto == "standard") {
        $preco_base = 300;
        echo "Quarto escolhido: Standard (R$ $preco_base por dia) <br>";
    } else if ($quarto == "luxo") {
        $preco_base = 500;
        echo "Quarto escolhido: Luxo (R$ $preco_base por dia) <br>";
    } else if ($quarto == "suite") {
        $preco_base = 800;
        echo "Quarto escolhido: Suíte (R$ $preco_base por dia) <br>";
    } else {
        echo "Tipo de quarto inválido.";
        exit;
    }
    
    if ($temporada == "baixa") {
        $desconto = 0.50;
        echo "Temporada escolhida: Baixa (50% de desconto) <br>";
    } else if ($temporada == "media") {
        $desconto = 0.30;
        echo "Temporada escolhida: Média (30% de desconto) <br>";
    } else if ($temporada == "alta") {
        $desconto = 0.10;
        echo "Temporada escolhida: Alta (10% de desconto) <br>";
    } else {
        echo "Temporada inválida.";
        exit;
    }
    
    $preco_total = $preco_base * $dias;
    $valor_desconto = $preco_total * $desconto;
    $preco_final = $preco_total - $valor_desconto;

    echo "Resumo da Reserva:<br>";
    echo "Dias: $dias | Total: R$ " . number_format($preco_total, 2);
    echo "Desconto: R$ " . number_format($valor_desconto, 2). " | Final: R$ " . number_format($preco_final,2);

    ?>
    
</body>
</html>