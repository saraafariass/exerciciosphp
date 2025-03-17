<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de adivinhação com Dicas</title>
</head>
<body>
    <h1>Calculadora de desconto</h1>

    <?php
    
    $numero_secreto = rand(1,100);
    $limite = 5;
    $palpite = intval($_GET['palpite']);

    if ($palpite < $numero_secreto){
        echo "Palpite baixo. Tente novamente";
    } elseif ($palpite > $numero_secreto) {
        echo "Palpite alto. Tente novamente";
    } else{
        echo "Acertou! Você tentou {$tentativa} vezes";

        $numero_secreto = rand(1,100);
        $tentativas_usadas = 0; // reinicia
    }

    if ($tentativas_usadas >= $limite_tentativas && $tentativa != $numero_secreto) {
        $mensagem = "Limite de tentativas concluídas! O número era $numero_secreto.";
        // reinicia
        $numero_secreto = rand(1, 100);
        $tentativas_usadas = 0;
    }
    

    ?>
</body>
</html>