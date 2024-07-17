<?php

// Solicita ao usuário para inserir o preço do primeiro produto:

echo "Insira o preço do primeiro produto: ";
$preco1 = trim(fgets(STDIN));

echo "Insira o preço do segundo produto: ";
$preco2 = trim(fgets(STDIN));

echo "Insira o preço do terceiro produto: ";
$preco3 = trim(fgets(STDIN));

if ($preco1 <= $preco2 && $preco1 <= $preco3) {
    echo "Você deve comprar o primeiro produto, que custa: R$$preco1\n";
} elseif ($preco2 <= $preco1 && $preco2 <= $preco3) {
    echo "Você deve comprar o segundo produto, que custa: R$$preco2\n";
} else {
    echo "Você deve comprar o terceiro produto, que custa: R$$preco3\n";
}