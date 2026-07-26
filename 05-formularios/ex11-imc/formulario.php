<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <form action="resultado.php" method="POST">
        <label for="peso">Peso (kg):</label><br>
        <input type="number" step="0.01" name="peso" id="peso" required><br><br>

        <label for="altura">Altura (m):</label><br>
        <input type="number" step="0.01" name="altura" id="altura" required><br><br>

        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>