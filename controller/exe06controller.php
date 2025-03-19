<?php
    session_start();

    if (!isset($_SESSION['numeroSorteado'])) {
        $_SESSION['numeroSorteado'] = rand(1, 100);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de adivinhação com Dicas</title>
</head>
<body>
    <h1>Jogo de Adivinhação</h1>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['numero'])) {
                $numero = (int)$_POST['numero'];
                $numeroSorteado = $_SESSION['numeroSorteado'];
    
                if ($numero == $numeroSorteado) {
                    echo "Parabéns, você acertou o número!";
                    unset($_SESSION['numeroSorteado']);
                } elseif ($numero < $numeroSorteado) {
                    echo "O número sorteado é maior que o número informado.";
                } else {
                    echo "O número sorteado é menor que o número informado.";
                }
            }
        }
    ?>

</body>
</html>