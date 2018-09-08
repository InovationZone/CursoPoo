<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 07/09/2018
 * Time: 18:59
 */
require_once "Pessoa.php";
class Aluno extends Pessoa
{
    private $matricula;
    private $curso;

    /**
     * Aluno constructor.
     * @param $matricula
     */

    public function cancelarMatr(){
        echo "matrícula será cancelada";
    }

    /**
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * @return mixed
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * @param mixed $curso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }


}