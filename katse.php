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

//sort($perekondPeppa); //tähestiku järjekorras
//asort($perekondPeppa); //tähestiku järjekord aga nimed jätab alles
//ksort($perekondPeppa); //võtmete järgi sorteerimine

// massiivi väljastamine - funktsioon
function suguVarv($sugu) {
    if ($sugu == 'naine') {
        echo '<div style="color: red">';
    } else {
        echo '<div style="color: blue">';
    }
}

function valjastaInfo($massiiv) {
    foreach ($massiiv as $alamMassiivNimi => $alamMassiivAndmed) {
        suguVarv($alamMassiivAndmed['sugu']);
        echo '<b>'.$alamMassiivNimi.'</b>';
        foreach ($alamMassiivAndmed as $elemendiNimi => $elemendiVaartus) {
            suguVarv($alamMassiivAndmed['sugu']);
            echo $elemendiNimi.' - '.$elemendiVaartus.'</div>';
        }
        echo '<hr>';
    }
}

function suguVordlus($porsas1, $porsas2) {
    if ($porsas1['sugu'] == $porsas2['sugu']) {
        return 0; }
    return ($porsas1['sugu'] < $porsas2['sugu']) ? -1 : 1;
}

// Massiivi loomine
$perekondPeppa = array(
    'Peppa' => array(
        'nimi' => 'Peppa',
        'amet' => 'põrsaslaps',
        'vanus' => 5,
        'sugu' => 'naine'
    ),
    'Georg' => array(
        'nimi' => 'Georg',
        'amet' => 'põrsaslaps',
        'vanus' => 2,
        'sugu' => 'mees'
    ),
    'Põrsas Ema' => array(
        'nimi' => 'Ema Põrsas',
        'amet' => 'põrsasema',
        'vanus' => 35,
        'sugu' => 'naine'
    ),
    'Põrsas Isa' => array(
        'nimi' => 'Isa Põrsas',
        'amet' => 'põrsasisa',
        'vanus' => 37,
        'sugu' => 'mees'
    )
);

uasort($perekondPeppa, 'suguVordlus');

// lehe sisu väljastamine
echo '
<!doctype html>
<html>
    <head>
        <title> Massiiv </title>
        <link type="text/css" rel="stylesheet" href="style.css">
    </head> 
    <body>';

valjastaInfo($perekondPeppa);

echo '      
    </body> 
</html>
';
?>
