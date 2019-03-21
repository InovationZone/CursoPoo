<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 22:50
 */

namespace InovationZone\Poo\Projeto;

class Aluno extends Pessoa
{
    private $login;
    private $totAssistido;

    /**
     * Aluno constructor.
     */
    public function __construct($nome , $idade , $sexo, $login)
    {
        parent::__construct($nome , $idade , $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }


    public function ganharExp($n)
    {
        // TODO: Implement gaanharExp() method.
    }

    public function viuMaisUm() {
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * @param mixed $totAssistido
     */
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;
    }


}