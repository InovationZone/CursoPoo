<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 21:21
 */

require_once 'Ave.php';
require_once 'Mamifero.php';
require_once 'Peixe.php';
require_once 'Reptil.php';
require_once 'Tubarao.php';
require_once 'Cachorro.php';

$ave = new ave();
$ave->setPeso(10);
$ave->setIdade(1);
$ave->setMembros(2);
$ave->setCorPena('Preta');
$ave->locomover();echo "</br>";

$mamifero = new Mamifero();
$mamifero->locomover();

//cachorro

$cachorro = new Cachorro();



//tubarao
$tubarao = new Tubarao();
$tubarao->alimentar();

echo "<pre>";
    print_r($ave);
    print_r($mamifero);
    print_r($tubarao);
    print_r($cachorro);
echo "</pre>";

