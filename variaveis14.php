<?php

// Conversão de temperatura:

echo "Digite a temperatura em graus Celsius: ";
$celsius = trim(fgets(STDIN));

$fahrenheit = ($celsius * 9/5) + 32;

echo "\n$celsius°C equivale a $fahrenheit°F\n";