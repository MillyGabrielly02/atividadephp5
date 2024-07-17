<?php

// Verificação de número primo:

function ehPrimo($numero) {

    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

echo "Digite um número inteiro: ";
$numero = intval(trim(fgets(STDIN)));

if (ehPrimo($numero)) {
    echo "$numero é um número primo.\n";
} else {
    echo "$numero não é um número primo.\n";
}