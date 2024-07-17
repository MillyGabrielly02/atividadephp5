<?php

//Maior e menor entre três números:

echo "Insira o primeiro número: ";
$numero1 = trim(fgets(STDIN));

echo "Insira o segundo número: ";
$numero2 = trim(fgets(STDIN));

echo "Insira o terceiro número: ";
$numero3 = trim(fgets(STDIN));

if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    $maior = $numero1;
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    $maior = $numero2;
} else {
    $maior = $numero3;
}

if ($numero1 <= $numero2 && $numero1 <= $numero3) {
    $menor = $numero1;
} elseif ($numero2 <= $numero1 && $numero2 <= $numero3) {
    $menor = $numero2;
} else {
    $menor = $numero3;
}

echo "O maior número é: $maior\n";
echo "O menor número é: $menor\n";