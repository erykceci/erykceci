<?php
require_once 'dane-start.php';

$suma = 0;
$brakuje = 0;
$najdroższy = null;

foreach ($produkty as $p) {
    $suma += $p['cena'] * $p['ilosc'];
    if ($p['ilosc'] == 0){
        $brakuje++;
    }
    if ($najdroższy === null || $p['cena'] > $najdroższy['cena']) {     
        $najdroższy = $p;
    }
}

$szukane = "Kabel HDMI 2m";
$znaleziony = null;
foreach ($produkty as $p) {
    if ($p['nazwa']=== $szukane) {
        $znaleziony = $p;
        break;
    }
}
    

echo "Wartość magazynu: " . number_format($suma, 2, ',', ' ')." zł<br>";
echo "Niedostępne: $brakuje<br>";
echo "Najdroższy: " . $najdroższy['nazwa']. "<br>"; 
echo $znaleziony === null ? "Nie znaleziono" : "Znaleziono: " . $znaleziony['nazwa'] . "<br>";
//zamiast 0 wpisujemy null poniewaz 
//wpisujac %szukane nazwy produktow ktore nie znajduja sie na tablicy pokazuje komunikat-Nie znaleziono 
?>