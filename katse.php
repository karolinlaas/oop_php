<?php
/**
 * Created by PhpStorm.
 * User: karolin.laas
 * Date: 06.12.2018
 * Time: 11:08
 */


// Massiivid
// array();
/*
 * $massiiv = array() // tühi massiiv, siin ei ole midagi
 * $massiiv() = väärtus
 * */

// Massiivi loomine
$porsasPeppa = array(
    'nimi' => 'Peppa',
    'amet' => 'põrsaslaps',
    'vanus' => 5,
    'sugu' => 'naine');

$porsasGeorg = array(
    'nimi' => 'Georg',
    'amet' => 'põrsaslaps',
    'vanus' => 2,
    'sugu' => 'mees'
);

// massiivi väljastamine
function valjastaInfo($massiiv) {
    foreach($massiiv as $elemendiNimi=>$elemendiVaartus) {
        echo $elemendiNimi.' - '.$elemendiVaartus.'<br>';
    }
}

// lehe sisu väljastamine
echo '
<!doctype html>
<html>
    <head>
        <title> Massiiv </title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head> 
    <body>';

valjastaInfo($porsasPeppa);
echo '<br>';
valjastaInfo($porsasGeorg);



echo '      
    </body> 
</html>
';
?>
