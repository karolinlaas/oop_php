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
    )
);

echo '<pre>';
print_r($perekondPeppa);
echo '</pre>';

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
