<?php

// Contagem regressiva:

echo "Digite um número positivo: ";
$numero = intval(trim(fgets(STDIN)));

if ($numero <= 0) {
    echo "Por favor, insira um número positivo válido.\n";
} else {

    echo "\nContagem regressiva iniciando de $numero:\n";
    for ($i = $numero; $i >= 0; $i--) {
        echo "$i\n";
    }
}