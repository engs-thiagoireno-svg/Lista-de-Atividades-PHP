<?php
$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso / ($altura * $altura);
$imc = round($imc, 2);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do IMC</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>Seu IMC é: <strong><?php echo $imc; ?></strong></p>

    <a href="formulario.php">Calcular novamente</a>
</body>
</html>