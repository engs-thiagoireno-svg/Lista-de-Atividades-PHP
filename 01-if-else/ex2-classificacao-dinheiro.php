<?php
$dinheiro = 50000;

if ($dinheiro < 1000) {
    echo "Pobre";
} else if ($dinheiro < 5000) {
    echo "Classe Média";
} else if ($dinheiro < 50000) {
    echo "Riquinho";
} else if ($dinheiro < 1000000000) {
    echo "Ricão";
} else {
    echo "Elon Musk";
}