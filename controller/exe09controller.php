<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas Escolares</title>
</head>
<body>
    <h1> Sistema de Notas Escolares</h1>

    <?php

    $provas = floatval($_REQUEST['provas']);
    $trabalhos = floatval($_REQUEST['trabalhos']);
    $participacao = floatval($_REQUEST['participacao']);

    $peso_prova = 2;
    $peso_trabalho = 1;
    $peso_participacao = 0.5;

    $nota = ($provas * 2 + $trabalhos * 1 + $participacao * 0.5) / 3.5;

    if ($nota >= 6.0) {
        echo "Aprovado com nota: " . number_format($nota, 1);
        
    } else{
        echo "Reprovado com nota: " . number_format($nota, 1);

    }
    


    ?>
</body>
</html>