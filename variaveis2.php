<?php

// Positivo ou negativo:

echo "Insira um número: ";
$numero = trim(fgets(STDIN));


if ($numero > 0) {
    echo "Este número é positivo.\n";
} elseif ($numero < 0) {
    echo "Este número é negativo.\n";
} else {
    echo "O número é zero.\n";
}
