<?php

//Vogal ou consoante:

echo "Digite uma letra: ";
$letra = trim(fgets(STDIN));


$letra = strtolower($letra);
if (strlen($letra) == 1 && ctype_alpha($letra)) {
    if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
        echo "A letra é uma vogal.\n";
    } else {
        echo "A letra é uma consoante.\n";
    }
} else {
    echo "Entrada inválida. Por favor, insira uma única letra.\n";
}
