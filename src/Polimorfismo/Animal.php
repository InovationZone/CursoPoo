<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 20:58
 */

namespace InovationZone\Poo\Polimorfismo;

abstract class Animal
{
    protected  $peso;
    protected $idade;
    protected $membros;

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * @param mixed $membros
     */
    public function setMembros($membros)
    {
        $this->membros = $membros;
    }
}