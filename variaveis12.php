<?php

// Calculadora de IMC (Índice de Massa Corporal):

echo "Digite seu peso em quilogramas: ";
$peso = trim(fgets(STDIN));

echo "Digite sua altura em metros: ";
$altura = trim(fgets(STDIN));

$imc = $peso / ($altura * $altura);

echo "\nSeu IMC é: " . number_format($imc, 2) . "\n";

if ($imc < 18.5) {
    echo "Você está abaixo do peso.\n";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Você está com peso normal.\n";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Você está com sobrepeso.\n";
} else {
    echo "Você está obeso.\n";
}