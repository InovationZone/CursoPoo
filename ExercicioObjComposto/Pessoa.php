<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 07/09/2018
 * Time: 18:02
 */

class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome , $idade , $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }


}