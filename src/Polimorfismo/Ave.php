<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 21:18
 */

namespace InovationZone\Poo\Polimorfismo;

class Ave extends Animal
{
    private $corPena;

    public function locomover()
    {
        // TODO: Implement locomover() method.
        echo "voando";
    }

    public function alimentar()
    {
        // TODO: Implement alimentar() method.
        echo "comendo frutas";
    }

    public function emitirSom()
    {
        // TODO: Implement emitirSom() method.
        echo "Som de ave";
    }

    public function fazerNinho(){
        echo "contruiu um ninho";
    }

    /**
     * @return mixed
     */
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * @param mixed $corPena
     */
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }


}