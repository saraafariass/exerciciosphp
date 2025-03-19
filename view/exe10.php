
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Hotel</title>
</head>
<body>
    <h1>Reservas de Hotel</h1>

    <form method="post" action="../controller/exe10controller.php">

            <legend>Informe os dados da reserva:</legend>

            <div>
                <label for="nome">Nome do hóspede:</label><br>
                <input type="text" id="nome" name="nome" required><br><br>
            </div>

            <div>
                <label for="quarto">Tipo de quarto:</label><br>
                <select id="quarto" name="quarto" required>
                    <option value="standard">Standard</option>
                    <option value="luxo">Luxo</option>
                    <option value="suite">Suíte</option>
                </select><br><br>
            </div>

            <div>
                <label for="temporada">Temporada:</label><br>
                <select id="temporada" name="temporada" required>
                    <option value="baixa">Baixa (50% de desconto)</option>
                    <option value="media">Média (30% de desconto)</option>
                    <option value="alta">Alta (10% de desconto)</option>
                </select><br><br>
            </div>

            <div>
                <label for="dias">Quantidade de dias:</label><br>
                <input type="number" id="dias" name="dias" required><br><br>
            </div>
        </fieldset>

        <button type="submit">Calcular reserva</button>
    </form>
</body>
</html>
