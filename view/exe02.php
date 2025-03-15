<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de desconto</title>
</head>
<body>
    <h1>Calculadora de desconto</h1>
    <form method="post" action="desconto_controller.php">
        <div> 
            <label for="preco">Digite o preço do produto:</label><br>
            <input type="price" name="preco" required><br>
        </div>

        <div> 
            <button type="submit">Confirmar</button><br>
        </div>
        
    </form>
</body>
</html>