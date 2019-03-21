<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 21:03
 */

namespace InovationZone\Poo\Polimorfismo;

class Mamifero
{
    private $corPelo;

    public function locomover() {
        echo "correndo";
    }

    public function alimentar(){
        echo "mamando";
    }

    public function emitirSom(){
        echo "som de mamífero";
    }

    /**
     * @return mixed
     */
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * @param mixed $corPelo
     */
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }



}