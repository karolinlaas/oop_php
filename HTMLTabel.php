<?php
/**
 * Created by PhpStorm.
 * User: karolin.laas
 * Date: 13.12.2018
 * Time: 11:04
 */

require_once './Tabel.php';
class HTMLTabel extends Tabel
{
    /**
     * HTMLTabel constructor.
     */
    public function __construct()
    {
            echo 'HTML';
            parent::__construct();
    }

    /*
 * vaata tabelit massiiv foreach abil ridade kaupa ja väljasta igal real olev element HTML tabelina
 * */
    function naitaTabel()
    {
        echo '<table border = 1px>';
        foreach ($this->tabel as $rida) {
            echo '<tr>';
            foreach ($rida as $element) {
                echo '<td>'.$element.'</td>';
            }
            echo '</td>';
        }
        echo '</table>';
    }


}