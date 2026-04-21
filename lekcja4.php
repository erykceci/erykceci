<?php

$a = 12;
$b = 8;

echo "wartości początkowe: a = $a, b = $b\n";


while ($a != $b) {
    //sprawdzanie warunku a > b
    if ($a > $b) {
        // Ścieżka TAK: a = a - b
        $a = $a - $b;
    } else {
        //Ścieżka NIE: b = b - a
        $b = $b - $a;
    }
}


echo "Najwiekszy wspólny dzielnik (NWD) wynosi: " . $a;
?>