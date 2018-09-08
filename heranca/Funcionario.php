<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 07/09/2018
 * Time: 19:04
 */

require_once "Pessoa.php";
class Funcionario extends Pessoa
{
    private $setor;
    private $trabalhando;

    /**
     * Funcionario constructor.
     */

    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }

    /**
     * @return mixed
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @param mixed $setor
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    /**
     * @return mixed
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * @param mixed $trabalhando
     */
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;
    }



}