<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use InovationZone\Poo\RelClasses\Lutador;
use InovationZone\Poo\RelClasses\Luta;

$l = array();

$l[0] = new Lutador("Pretty boy","França" , 30,1.75,
                 68.9, 11, 2, 1);
$l[1] = new Lutador("Putscript","Brasil" , 29,1.68,
    57.8, 14, 2, 3);
$l[2] = new Lutador("Snapshadow","Eua" , 35,1.65,
    80.9, 12, 2, 1);
$l[3] = new Lutador("Dead Code","Áustralia" , 28,1.93,
    81.3, 13, 0, 2);
$l[4] = new Lutador("Ufocobol","Brasil" , 37,1.70,
    119.3, 5, 4, 3);
$l[5] = new Lutador("Nerdaart","Eua" , 30,1.81,
    105.7,  12, 2, 4);


$UEC01 = new Luta();
$UEC01->marcarLuta($l[2] , $l[3]);
$UEC01->lutar();
//$l[0]->ganharLuta();
//$l[0]->apresentar();
//$l[0]->status();




