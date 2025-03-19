<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas Escolares</title>
</head>
<body>
    <h1> Sistema de Notas Escolares</h1>
    <form method="post" action="../controller/exe09controller.php">
        <div> 
            <label for="provas">Nota das provas:</label><br>
            <input type="number" name="provas" required><br>
            <label for="trabalhos">Nota dos trabalhos:</label><br>
            <input type="number" name="trabalhos" required><br>
            <label for="participacao">Nota de participação:</label><br>
            <input type="number" name="participacao" required><br>
        </div>

        <div> 
            <button type="submit"> Calcular</button><br>
        </div>
    
    </form>
    
</body>
</html>