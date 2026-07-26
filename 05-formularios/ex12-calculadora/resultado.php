<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operacao = $_POST["operacao"];

switch ($operacao) {
    case "somar":
        $resultado = $numero1 + $numero2;
        break;
    case "subtrair":
        $resultado = $numero1 - $numero2;
        break;
    case "multiplicar":
        $resultado = $numero1 * $numero2;
        break;
    case "dividir":
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            $resultado = "Erro: divisão por zero!";
        }
        break;
    default:
        $resultado = "Operação inválida";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>Resultado: <strong><?php echo $resultado; ?></strong></p>

    <a href="formulario.php">Calcular novamente</a>
</body>
</html>