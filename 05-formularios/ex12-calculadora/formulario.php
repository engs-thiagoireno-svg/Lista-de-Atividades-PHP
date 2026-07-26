<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <form action="resultado.php" method="POST">
        <label for="numero1">Número 1:</label><br>
        <input type="number" step="any" name="numero1" id="numero1" required><br><br>

        <label for="numero2">Número 2:</label><br>
        <input type="number" step="any" name="numero2" id="numero2" required><br><br>

        <button type="submit" name="operacao" value="somar">Somar</button>
        <button type="submit" name="operacao" value="subtrair">Subtrair</button>
        <button type="submit" name="operacao" value="multiplicar">Multiplicar</button>
        <button type="submit" name="operacao" value="dividir">Dividir</button>
    </form>
</body>
</html>