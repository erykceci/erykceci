<?php
// Przypisanie wartości początkowych  (zgodnie ze schematem)
$a = 12;
$b = 8;

echo "wartości początkowe: a = $a, b = $b\n";

// Pętla wykonuje się dopóki a  nie jest równe b (warunek a == b na TAK kończy algorytm)
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

// Wyświetlenie wyniku (wartość a na koniec algorytmu)
echo "Najwiekszy wspólny dzielnik (NWD) wynosi: " . $a;
?>