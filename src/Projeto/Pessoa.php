<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 22:45
 */

namespace InovationZone\Poo\Projeto;

abstract class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $idade
     * @param $sexo
     */
    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }


    protected function ganharExp($n) {
        $this->experiencia += $n;
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

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

}