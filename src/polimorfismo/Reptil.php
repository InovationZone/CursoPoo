<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 21:09
 */



require_once 'Animal.php';
class Reptil extends Animal
{
    private $corEscama;

    public function locomover()
    {
        // TODO: Implement locomover() method.
        echo "Comendo vegetais";
    }

    public function alimentar()
    {
        // TODO: Implement alimentar() method.
        echo "Comendo Vegetais";
    }

    public function emitirSom()
    {
        // TODO: Implement emitirSom() method.
        echo "Som de Réptil";
    }

    /**
     * @return mixed
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * @param mixed $corEscama
     */
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }


}