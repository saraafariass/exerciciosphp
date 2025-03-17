<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jogo de adivinhação com Dicas</title>
</head>
<body>
    <h1> Jogo de adivinhação com dicas</h1>
    <p>Tente adivinhar o número entre 1 e 100. Você tem 5 tentativas.</p>
    <form method="get" action="exe06controller.php">
        <div> 
            <label for="palpite">Deixe seu palpite:</label><br>
            <input type="number" name="palpite" required><br>
        </div>

        <div> 
            <button type="submit">Advinhar</button><br>
        </div>
        
    </form>
</body>
</html>