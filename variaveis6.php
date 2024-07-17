<?php

// Maior entre três números:

echo "Insira o primeiro número: ";
$numero1 = trim(fgets(STDIN));


echo "Insira o segundo número: ";
$numero2 = trim(fgets(STDIN));

echo "Insira o terceiro número: ";
$numero3 = trim(fgets(STDIN));


if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    echo "O maior número é: $numero1\n";
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    echo "O maior número é: $numero2\n";
} else {
    echo "O maior número é: $numero3\n";
}