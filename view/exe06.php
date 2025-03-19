<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jogo de adivinhação com Dicas</title>
</head>
<body>
    <h1> Jogo de adivinhação com dicas</h1>
    <p>Tente adivinhar o número entre 1 e 100.</p>
    <form action="../controller/exe06controller.php" method="post">
        <div>
            <label for="numero">Digite um número entre 1 e 100:</label>
        </div>
        <br>
        <div>
            <input type="number" name="numero" id="numero" required>
        </div>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>