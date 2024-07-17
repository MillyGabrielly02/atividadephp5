<?php

// Reajuste salarial:

echo "Digite o salário atual do colaborador: ";
$salario_atual = trim(fgets(STDIN));

$percentual_aumento = 0;
$valor_aumento = 0;

if ($salario_atual <= 280) {
    $percentual_aumento = 20;
} elseif ($salario_atual > 280 && $salario_atual <= 700) {
    $percentual_aumento = 15;
} elseif ($salario_atual > 700 && $salario_atual <= 1500) {
    $percentual_aumento = 10;
} elseif ($salario_atual > 1500) {
    $percentual_aumento = 5;
}

$valor_aumento = ($salario_atual * $percentual_aumento) / 100;
$novo_salario = $salario_atual + $valor_aumento;

echo "\nSalário antes do reajuste: R$ " . number_format($salario_atual, 2, ',', '.') . "\n";
echo "Percentual de aumento aplicado: " . $percentual_aumento . "%\n";
echo "Valor do aumento: R$ " . number_format($valor_aumento, 2, ',', '.') . "\n";
echo "Novo salário após o reajuste: R$ " . number_format($novo_salario, 2, ',', '.') . "\n";