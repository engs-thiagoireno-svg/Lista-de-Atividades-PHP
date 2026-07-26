<?php
function calcular($num1, $num2) {
    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $frase = "Uau, " . $num1 . " e " . $num2 . " juntos formam números incríveis!";

    return [
        "soma" => $soma,
        "subtracao" => $subtracao,
        "frase" => $frase
    ];
}

$resultado = calcular(10, 4);

echo "Soma: " . $resultado["soma"] . "<br>";
echo "Subtração: " . $resultado["subtracao"] . "<br>";
echo "Frase: " . $resultado["frase"];