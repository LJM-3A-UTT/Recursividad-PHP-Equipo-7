<?php

function sumaDigitos($numero) {
    if ($numero < 10) {
        return $numero;
    } else {
        return $numero % 10 + sumaDigitos(intval($numero / 10));
    }
}

$numero = 123;
$resultado = sumaDigitos($numero);

echo "La suma de los dígitos de $numero es: $resultado"; //El resultado es 6

?>
