<?php

// Média de notas:

echo "Insira a primeira nota: ";
$nota1 = trim(fgets(STDIN));


echo "Insira a segunda nota: ";
$nota2 = trim(fgets(STDIN));


$media = ($nota1 + $nota2) / 2;


if ($media == 10) {
    echo "Aprovado com Distinção\n";
} elseif ($media >= 7) {
    echo "Aprovado\n";
} else {
    echo "Reprovado\n";
}