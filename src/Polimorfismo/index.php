<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 21:21
 */

require_once __DIR__ . "/../../vendor/autoload.php";

use InovationZone\Poo\Polimorfismo\Ave;
use InovationZone\Poo\Polimorfismo\Mamifero;
use InovationZone\Poo\Polimorfismo\Cachorro;
use InovationZone\Poo\Polimorfismo\Tubarao;

$ave = new ave();

$ave->setPeso(10);
$ave->setIdade(1);
$ave->setMembros(2);
$ave->setCorPena('Preta');
$ave->locomover();echo "</br>";

$mamifero = new Mamifero();

$mamifero->locomover();


$cachorro = new Cachorro();


$tubarao = new Tubarao();
$tubarao->alimentar();

echo "<pre>";
    print_r($ave);
    print_r($mamifero);
    print_r($tubarao);
    print_r($cachorro);
echo "</pre>";

