<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 21:14
 */
require_once 'Animal.php';
class Peixe extends Animal
{
    private $corEscama;

    public function soltarBolha() {
        echo "soltou uma bolha";
    }
    public function locomover()
    {
        // TODO: Implement locomover() method.
        echo "nadando";
    }

    public function alimentar()
    {
        // TODO: Implement alimentar() method.
        echo "Comendo substâncias";
    }

    public function emitirSom()
    {
        // TODO: Implement emitirSom() method.
        echo "sem som";
    }

}