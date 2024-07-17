<?php

// Turno de estudo:

echo "Em que turno você estuda? (M-matutino, V-vespertino, N-noturno): ";
$turno = strtoupper(trim(fgets(STDIN)));

if ($turno === 'M') {
    echo "Bom dia!\n";
} elseif ($turno === 'V') {
    echo "Boa tarde!\n";
} elseif ($turno === 'N') {
    echo "Boa noite!\n";
} else {
    echo "Valor inválido!\n";
}