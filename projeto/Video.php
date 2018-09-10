<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 22:30
 */

require_once 'AcoesVideo.php';
class Video implements AcoesVideo
{
    private $titulo;
    private $tipo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }


    public function play()
    {
        $this->reproduzindo = true;

    }

    public function pause()
    {

        $this->reproduzindo = false;
    }

    public function like()
    {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * @param mixed $avaliacao
     */
    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }

    /**
     * @return mixed
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @param mixed $views
     */
    public function setViews($views)
    {
        $this->views = $views;
    }

    /**
     * @return mixed
     */
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    /**
     * @param mixed $curtidas
     */
    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;
    }

    /**
     * @return mixed
     */
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * @param mixed $reproduzindo
     */
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
    }


}