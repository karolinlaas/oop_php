<?php
/**
 * Created by PhpStorm.
 * User: karolin.laas
 * Date: 13.12.2018
 * Time: 10:44
 */
//  lugesin sisse Tabel.php faili sisu (importimine)
require_once './Tabel.php';

//  tabeli objekti valmistamine
$lihtTabel = new Tabel();

//  lisame read sisuga
$lihtTabel->lisaRida(array(1, 2, 3));
$lihtTabel->lisaRida(array(4, 5, 6));
$lihtTabel->lisaRida(array(7, 8, 9));

var_dump($lihtTabel);
echo '<pre>';
print_r($lihtTabel);
echo '</pre>';

//  tabeli väljastamine
$lihtTabel->naitaTabel();