<?php

//Maior entre dois número:

echo "Insira o primeiro número: ";
$numero1 = trim(fgets(STDIN));


echo "Insira o segundo número: ";
$numero2 = trim(fgets(STDIN));


if ($numero1 > $numero2) {
    echo "O maior número é: $numero1\n";
} elseif ($numero1 < $numero2) {
    echo "O maior número é: $numero2\n";
} else {
    echo "Os dois números são iguais: $numero1\n";
}

