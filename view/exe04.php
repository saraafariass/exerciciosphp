<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de imposto de renda</title>
</head>
<body>
    <h1>Calculadora de imposto de renda </h1>

    <form method="post" action="../controller/exe04controller.php">
        <div> 
            <label for="salario">Digite o seu salário:</label><br>
            <input type="number" name="salario" required><br>
        </div>

        <div> 
            <button type="submit">Verificar</button><br>
        </div>
        
    </form>
    
</body>
</html>