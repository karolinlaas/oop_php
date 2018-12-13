<?php
/**
 * Created by PhpStorm.
 * User: karolin.laas
 * Date: 13.12.2018
 * Time: 10:28
 */

class Tabel
{
//  klassi omadused
    var $tabel = array();
//    var $rida = array();

//  klassi meetodid
    /**
     * Tabel constructor.
     */
    public function __construct()
    {
        echo 'Tabel tüüpi objekt on loodud. <br>';
    }

    /**
     * @param $rida - massiiv (generate-> PHPdoc blocks)
     */
    function lisaRida($rida) {
        $this->tabel[] = $rida;
    }

    /*
     * vaata tabelit massiiv foreach abil ridade kaupa ja väljasta igal real olev element tühikuga eraldades
     * */
    function naitaTabel() {
        foreach ($this->tabel as $rida) {
            foreach ($rida as $element) {
                echo $element.'&nbsp';
            }
            echo '<br>';
        }
    }
}