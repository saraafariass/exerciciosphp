<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Classificação de Produtos</title>
</head>
<body>
    <h1>Sistema de Classificação de Produtos </h1>
    
    <form method="post" action="../controller/exe05controller.php">
        <div> 
            <label for="produto">Digite o nome do produto:</label><br>
            <input type="text" name="produto" required><br>
        </div>

        <div> 
            <button type="submit">Classificar</button><br>
        </div>
    
    </form>
    
</body>
</html>