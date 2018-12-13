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


        function htmlTabel($ridadeArv, $veergudeArv) {
            echo '<table>';
            for ($reanumber = 1; $reanumber <= $ridadeArv; $reanumber++) {
                echo '<tr>';
                for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
                    echo '<td>';
                    echo $reanumber;
                    echo '</td>';
                }
                echo '</tr>';
            }

            echo '</table>';
        }


echo '
<!doctype html>
<html>
    <head>
        <title> Funkstioon </title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head> 
    <body>';

htmlTabel(4, 4);
echo '<hr>';
htmlTabel(2, 5);

echo '      
    </body> 
</html>
';
?>