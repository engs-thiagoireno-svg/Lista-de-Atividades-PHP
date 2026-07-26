<?php
$numeros = [4, 7, 12879.5];

foreach ($numeros as $numero) {
    echo "Tabuada do " . $numero . ":<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
    echo "<br>";
}