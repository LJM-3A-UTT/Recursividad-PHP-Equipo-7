<?php

function moverDisco($n, $origen, $destino) {
    echo "Mover disco $n desde la torre $origen hacia la torre $destino" . PHP_EOL;
}

function moverTorre($n, $origen, $destino, $auxiliar) {
    if ($n == 1) {
        moverDisco($n, $origen, $destino);
    } else {
        moverTorre($n - 1, $origen, $auxiliar, $destino);
        moverDisco($n, $origen, $destino);
        moverTorre($n - 1, $auxiliar, $destino, $origen);
    }
}

$numeroDiscos = 3;
moverTorre($numeroDiscos, 'A', 'C', 'B');

?>
