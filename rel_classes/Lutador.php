<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 26/08/2018
 * Time: 21:52
 */

class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    /**
     * Lutador constructor.
     * @param $nome
     * @param $nacionalidade
     * @param $idade
     * @param $altura
     * @param $peso
     * @param $vitorias
     * @param $derrotas
     * @param $empates
     */
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function apresentar() {
        echo "<p>----------------------------------</p>";
        echo "<p>Chegou a hora! o lutador " . $this->getNome();
        echo "veio diretamente de  " . $this->getNacionalidade();
        echo "tem " . $this->getIdade() . "anos e pesa " . $this->getPeso() . "Kg";
        echo "<br>ele tem " . $this->getVitorias() . " Vitórias";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " Empates";



    }

    public function status(){
        echo "<p>----------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso" .  $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes,";
        echo " perdeu " . $this->getDerrotas() . " vezes,";
        echo " empatou " . $this->getEmpates() . " vezes,";
    }

    public function ganharLuta(){
        $this->setVitorias($this->setVitorias() + 1);

    }

    public function perderLuta(){
        $this->setDerrotas($this->setDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->setEmpates() + 1);

    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * @param mixed $nacionalidade
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
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
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

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
        $this->setCategoria();
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    private function setCategoria()
    {
       if($this->peso < 52.2) {
           $this->categoria = "Inválido";
       } elseif ($this->peso <= 70.3) {
           $this->categoria = "Leve";
       } elseif ($this->peso <= 83.9){
           $this->categoria = "Médio";
       } elseif ($this->peso <= 120.2) {
           $this->categoria = "Pesado";
       } else {
           $this->categoria = "Inválido";
       }
    }

    /**
     * @return mixed
     */
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * @param mixed $vitorias
     */
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    /**
     * @return mixed
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * @param mixed $derrotas
     */
    public function setDerrotas($derrotas)
    {

        $this->derrotas = $derrotas;
    }

    /**
     * @return mixed
     */
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * @param mixed $empates
     */
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }



}