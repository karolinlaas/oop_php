<?php
/**
 * Created by PhpStorm.
 * User: karolin.laas
 * Date: 11.12.2018
 * Time: 9:22
 */

// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutja abil
    Sinu ees- ja perekonnanimi
    kursuse tähis
    kursuse number
    sinu kooli e-mail
b) väljastatud muutjate väärtused koos sobiva tekstiga html faili kujul
*/

$eesnimi = 'Karolin';
$perekonnanimi = 'Laas';
$kursuseTahis = 'KD';
$kursuseNumber = 18;
$email = 'karolin.laas@khk.ee';

echo '
 <!doctype html>
    <html>
        <head>
            <title> Kontroll </title>
        </head> 
        <body>
            <h2>Minu nimi on '.$eesnimi.' '.$perekonnanimi.'</h2> 
            <h3>Õpin kursusel '.$kursuseTahis, $kursuseNumber.'</h3>
            <h3>Minu kooli e-mail on '.$email.'</h3>
        </body>
    </html>
';
?>