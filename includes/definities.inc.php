<?php

include("dbh.inc.php");

// De sectie van de administratie gegevens omzetten naar een begrijpbare taal voor html ;)
$adresSQL = "SELECT adres, postcode, woonplaats, provincie, email, telefoonnummer, huisnaam FROM gegevens";
$adresRS = $link->query($adresSQL);

$adresDT = $adresRS->fetch_assoc(); 

// De tweede sectie van het huis omzetten anar een begrijpbare taal voor html ;)
$infoSQL = "SELECT kleinetoelichting, overhethuis, prijs, bouwjaar, oppervlakte FROM informatie";
$infoRS = $link->query($infoSQL);

$infoDT = $infoRS->fetch_assoc(); 



$voorprijs = $infoDT['prijs'];
$biedprijs =  number_format($voorprijs, 2, ',', '.');




