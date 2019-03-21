<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 07/09/2018
 * Time: 19:06
 */

namespace InovationZone\Poo\Heranca;

class Professor extends Pessoa
{
    private $especialidade;
    private $salario;

    public function receberAum($aum){
        $this->setSalario($this->getSalario() + $aum);
    }

    /**
     * @return mixed
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * @param mixed $especialidade
     */
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }


}