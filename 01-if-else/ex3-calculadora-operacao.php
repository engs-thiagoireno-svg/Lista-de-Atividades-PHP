<?php
$numero1 = 10;
$numero2 = 5;
$operacao = "+"; // pode ser +, -, *, /

if ($operacao == "+") {
    $resultado = $numero1 + $numero2;
} else if ($operacao == "-") {
    $resultado = $numero1 - $numero2;
} else if ($operacao == "*") {
    $resultado = $numero1 * $numero2;
} else if ($operacao == "/") {
    $resultado = $numero1 / $numero2;
} else {
    $resultado = "Operação inválida";
}

echo "Resultado: " . $resultado;