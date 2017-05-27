<?php

echo luas_segitiga(2,3);
echo luas_persegi();
echo keliling_persegi(4);
echo diameter_lingkaran();



function keliling_persegi($sisi){
    $kel = 2*($sisi+$sisi);
    return $kel;
}