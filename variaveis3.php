<?php

// Identificação de gênero:
    
echo "Digite uma letra (F ou M): ";
$letra = trim(fgets(STDIN));


if (strtoupper($letra) == "F") {
    echo "Feminino\n";
} elseif (strtoupper($letra) == "M") {
    echo "Masculino\n";
} else {
    echo "Sexo inválido\n";
}

