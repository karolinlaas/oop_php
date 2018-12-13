<?php
/**
 * Created by PhpStorm.
 * User: karolin.laas
 * Date: 06.12.2018
 * Time: 11:08
 */

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

//massiivi loomine
$numbrid = array(
    array(1, 2, 3),
    array(4, 5, 6)
);

// massiivi sisu testkontroll
var_dump($numbrid);
echo '<pre>';
print_r($numbrid);
echo '</pre>';

// massiivi elemendi väljastamine
echo $numbrid[1][1];
echo '<br>';

// massiivi suuruse kontoll - ridade arv
$ridadeArv = count($numbrid);
echo $ridadeArv;
echo '<br>';

// veergudeArv
$veergudeArv = count($numbrid[0]);
echo $veergudeArv;
echo '<br>';

//massiivi väljastamine for'iga
for($reaNumber = 0; $reaNumber < $ridadeArv; $reaNumber++) {
    for($veeruNumber = 0; $veeruNumber < $veergudeArv; $veeruNumber++) {
        echo $numbrid[$reaNumber][$veeruNumber].'&nbsp';
    }
    echo '<br>';
}

// massiivi väljastamine foreach'iga
foreach ($numbrid as $rida) {
    foreach ($rida as $number) {
        echo $number.'&nbsp';
    }
    echo '<br>';
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
