<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculadora de Tarifas de Energia </title>
</head>
<body>
    <h1> Calculadora de Tarifas de Energia </h1>
    <form method="post" action="exe08controller.php">
        <div> 
            <label for="consumo">Consumo mensal dm kW:</label><br>
            <input type="number" name="consumo" required><br>
        </div>

        <div> 
            <button type="submit"> Calcular</button><br>
        </div>
        
    </form>
</body>
</html>