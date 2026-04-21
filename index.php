<?php
$kasa = 20;

function praca(){
    echo "Praca, pracu...";
    return 20;
}
function piwkotartrajasne($kasa){
 echo "Mmmmm, dobre piwko .";
 return $kasa-5;
}

$kasa += praca();
$kasa += praca();
$kasa += praca();
$kasa += praca();
$kasa += praca();

$kasa = piwkotartrajasne($kasa);
$kasa = piwkotartrajasne($kasa);
$kasa = piwkotartrajasne($kasa);
$kasa = piwkotartrajasne($kasa);

echo "stan konta: $kasa zł;"
?>
