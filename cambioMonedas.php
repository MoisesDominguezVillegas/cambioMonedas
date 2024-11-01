<?php
#cantidad de monedas
$riel = 2103942;
$kyat = 19092;
$kron = 109;
$lek = 9094;

#conversion a moneda
$riel_exchange = 0.00025;
$kyat_exchange = 0.00076;
$kron_exchange = 0.11;
$lek_exchange = 0.00097;

#valor en dolares
$final_riel = $riel * $riel_exchange;
$final_kyat = $kyat * $kyat_exchange;
$final_kron = $kron * $kron_exchange;
$final_lek  =  $lek * $lek_exchange;

#total dolares
$suma_usd = $final_riel + $final_kyat + $final_kron + $final_lek;

echo "\n riel: " . $riel;
echo "\n kyat: " . $kyat;
echo "\n kron: " . $kron;
echo "\n lek: "  . $lek;


echo "\n Valor en dolares: " . $suma_usd  . " USD";



