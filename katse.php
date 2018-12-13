<?php
/**
 * Created by PhpStorm.
 * User: karolin.laas
 * Date: 06.12.2018
 * Time: 11:08
 */

// muutujate defineerimine
// $muutujaNimi = väärtus;
$lehePealkiri = 'Funktsioonid';
$sisuPealkiri = 'Muutujate defineerimine';
//Muutujate sisu testvaatamine
//var_dump($lehePealkiri);
//echo '<br>';
//var_dump($sisuPealkiri);
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
$naitaSisu = 0;
$naitaPeidetudInfo = 0;
// tsüklid
// for
/*
 * for($juhtimisMuutuja = algväärtus; $juhtimisMuutuja <= lõppväärtus; $juhtimisMuutuja++) {
 *      tegevused, mis toimuvad niikaua, kui $juhtimisMuutuja <= lõppväärtus kehtib
 * }
 * */
//$ridadeArv = 7;
//$veergudeArv = 5;
//Funktsioonid
/*
 * function funktsiooniNimi([$parameeter1], $parameeter2, ..., $paramN) {
 *      kõik tegevused,
 *      mis antud funktsiooni sees toimuvad
 * }
 * */

// Massiivid
// array();
/*
 * $massiiv = array() // tühi massiiv, siin ei ole midagi
 * $massiiv() = väärtus
 * */

// teksti väljastamine
//    echo '
//    <!doctype html>
//    <html>
//        <head>
//            <title> ' . $lehePealkiri . ' </title>
//            <link type="text/css" rel="stylesheet" href="style.css">
//        </head>
//        <body>';

//        if($naitaSisu == true) {
//            echo '<h1>' . $sisuPealkiri . '</h1>';
//      echo '
//                    <h1> ' . $sisuPealkiri . ' </h1>
//                    <h3>Andmetüübid</h3>
//                    <ul>
//                        <li>$taisarv = ' . $taisarv . ' - ' . gettype($taisarv) . '</li>
//                        <li>$reaalarv = ' . $reaalarv . ' - ' . gettype($reaalarv) . '</li>
//                        <li>$tekst = ' . $tekst . ' - ' . gettype($tekst) . '</li>
//                        <li>$toevaartusTrue = ' . $toevaartusTrue . ' - ' . gettype($toevaartusTrue) . '</li>
//                        <li>$toevaartusFalse = ' . $toevaartusFalse . ' - ' . gettype($toevaartusFalse) . '</li>
//                    </ul>
//                    ';
//            // tüübi teisendamise katse
//            echo $taisarv . ' + ' . $taisarv . ' = ' . ($taisarv + $taisarv);
//            echo '<br>';
//            settype($taisarv, 'string');
//            echo $taisarv . ' + ' . $taisarv . ' = ' . ($taisarv + $taisarv);
//            echo '<br>';
//            echo gettype($taisarv);
//        } else {
//            if ($naitaPeidetudInfo == true) {
//                echo '<h4>See on peidetud info.</h4>';
//            } else {
//                echo '<h4>Kõik on saladus.</h4>';
//            }
//        }

//funktsioon
function htmlTabel($ridadeArv = 0, $veergudeArv = 0) {
    $tabel = '<table>';
    for ($reanumber = 1; $reanumber <= $ridadeArv; $reanumber++) {
        $tabel = $tabel.'<tr>';
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            $tabel = $tabel.'<td>';
            $tabel = $tabel.$reanumber;
            $tabel = $tabel.'</td>';
        }
        $tabel = $tabel.'</tr>';
    }
    $tabel = $tabel.'</table>';
    return $tabel;
}

//massiiv
$nimed = array();
$nimed[] = 'Anna';
$nimed[] = 'Elen';
var_dump($nimed);
echo '<pre>';
print_r($nimed);
echo  '</pre>';

// lehe sisu väljastamine
echo '
<!doctype html>
<html>
    <head>
        <title> Funkstioon </title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head> 
    <body>';

// funktsiooni tööle kutsumine
$tabel1 = htmlTabel(4, 4);
echo $tabel1;
echo '<hr>';
$tabel2 = htmlTabel(2, 5);
echo $tabel2;
echo '<hr>';
$tabel3 = htmlTabel(1, 2);
echo $tabel3;

echo '      
    </body> 
</html>
';
?>