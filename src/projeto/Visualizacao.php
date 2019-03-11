<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 23:24
 */

require_once 'Video.php';
require_once 'Aluno.php';
class Visualizacao
{
    private $espectador;
    private $filme;

    /**
     * Visualizacao constructor.
     * @param $espectador
     * @param $filme
     */
    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);

    }


    public function Avaliar() {
        $this->filme->setAvaliacao(5);
    }

    /**
     * @return mixed
     */
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * @param mixed $espectador
     */
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    /**
     * @return mixed
     */
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * @param mixed $filme
     */
    public function setFilme($filme)
    {
        $this->filme = $filme;
    }


}