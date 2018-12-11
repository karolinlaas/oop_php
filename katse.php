<?php
/**
 * Created by PhpStorm.
 * User: karolin.laas
 * Date: 06.12.2018
 * Time: 11:08
 */

// muutujate defineerimine
// $muutujaNimi = väärtus;
$lehePealkiri = 'Katse leht';
$sisuPealkiri = 'Muutujate defineerimine';
//Muutujate sisu testvaatamine
var_dump($lehePealkiri);
echo '<br>';
var_dump($sisuPealkiri);
// andmetüübid
$taisarv = 7;
$reaalarv = -2.6;
$tekst = "Tere PHP";
$toevaartusTrue = true;
$toevaartusFalse = false;
// väärtuse tüübi kontroll - gettype($muutujaNimi)
// väärtuse tüübi teisendus - settype($muutujaNimi)
// ühendamine 'tekst katkeb '.$muutjaNimi.' tekst jätkub'
// tingimuslause
/*
 * if  (tingimus == true) {
 *      siis toimub see osa
 * } else {
 *      muidu toimub see osa
 * }
 * */
$naitaSisu = true;
$naitaPeidetudInfo = true;
// teksti väljastamine
    echo '
    <!doctype html>
    <html>
        <head>
            <title> ' . $lehePealkiri . ' </title>
        </head> 
        <body>';

    if($naitaSisu == true) {
    echo '
                    <h1> ' . $sisuPealkiri . ' </h1>
                    <h3>Andmetüübid</h3>
                    <ul>
                        <li>$taisarv = ' . $taisarv . ' - ' . gettype($taisarv) . '</li>
                        <li>$reaalarv = ' . $reaalarv . ' - ' . gettype($reaalarv) . '</li>
                        <li>$tekst = ' . $tekst . ' - ' . gettype($tekst) . '</li>
                        <li>$toevaartusTrue = ' . $toevaartusTrue . ' - ' . gettype($toevaartusTrue) . '</li>
                        <li>$toevaartusFalse = ' . $toevaartusFalse . ' - ' . gettype($toevaartusFalse) . '</li>
                    </ul>
                    ';
            // tüübi teisendamise katse
            echo $taisarv . ' + ' . $taisarv . ' = ' . ($taisarv + $taisarv);
            echo '<br>';
            settype($taisarv, 'string');
            echo $taisarv . ' + ' . $taisarv . ' = ' . ($taisarv + $taisarv);
            echo '<br>';
            echo gettype($taisarv);
    } else {
        if ($naitaPeidetudInfo == true) {
            echo '<h4>See on peidetud info</h4>';
        } else {
            echo '<h4>Kõik on saladus</h4>';
        }
    }

    echo '      
        </body> 
    </html>
    ';
?>