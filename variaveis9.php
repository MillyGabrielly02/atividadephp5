<?php

//Ordem decrescente:

echo "Digite o primeiro número: ";
$num1 = trim(fgets(STDIN));

echo "Digite o segundo número: ";
$num2 = trim(fgets(STDIN));

echo "Digite o terceiro número: ";
$num3 = trim(fgets(STDIN));


$maior = $num1;
$meio = $num2;
$menor = $num3;


if ($maior < $meio) {
    $temp = $maior;
    $maior = $meio;
    $meio = $temp;
}
if ($maior < $menor) {
    $temp = $maior;
    $maior = $menor;
    $menor = $temp;
}
if ($meio < $menor) {
    $temp = $meio;
    $meio = $menor;
    $menor = $temp;
}

echo "Em ordem decrescente: $maior, $meio, $menor\n";
