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

// Ülesanne 2
/*
 * Loo muutuja nimega värv, mille algväärtuseks pane "punane";
 * Koosta if-else if-else lause, mis väljastab teksi "Värviline tekst"
 * vastavalt määratud väärtusega.
 * Katseta vähemalt kolme HTML värviga - red, blue, orange - vastavalt tingimuslauses määra punane, sinine ja oranz
 * */

$eesnimi = 'Karolin';
$perekonnanimi = 'Laas';
$kursuseTahis = 'KD';
$kursuseNumber = 18;
$email = 'karolin.laas@khk.ee';

$varv = 'sinine';

echo '
 <!doctype html>
    <html>
        <head>
            <title> Kontroll </title>
        </head> 
        <body>
            <h2>Minu nimi on '.$eesnimi.' '.$perekonnanimi.'</h2> 
            <h3>Õpin kursusel '.$kursuseTahis, $kursuseNumber.'</h3>
            <h3>Minu kooli e-mail on '.$email.'</h3>';

            if($varv == 'punane') {
                echo '<h3 style="color: red">Värviline tekst</h3>';
            } else if($varv == 'sinine') {
                echo '<h3 style="color: blue">Värviline tekst</h3>';
            } else if($varv == 'oranz') {
                echo '<h3 style="color: orange">Värviline tekst</h3>';
            } else {
                echo '<h3>Sobiv värv pole valitud</h3>';
            }
echo '
        </body>
    </html>
';
?>