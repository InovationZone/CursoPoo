<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 07/09/2018
 * Time: 18:15
 */
namespace InovationZone\Poo\ExercicioObjComposto;

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function detalhes()
    {
        echo $this->titulo . "</br>";
        echo $this->autor . "</br>";
        echo $this->totPaginas . "</br>";
        echo $this->leitor->getNome() . "</br>";
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * @param mixed $totPaginas
     */
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    /**
     * @return int
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * @param int $pagAtual
     */
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    /**
     * @return bool
     */
    public function isAberto()
    {
        return $this->aberto;
    }

    /**
     * @param bool $aberto
     */
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    /**
     * @return mixed
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * @param mixed $leitor
     */
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }


    public function abrir()
    {
        $this->aberto = true;
        // TODO: Implement abrir() method.
    }

    public function fechar()
    {
        $this->aberto = false;
        // TODO: Implement fechar() method.
    }

    public function folhear($p)
    {
        if ($this->pagAtual > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
        // TODO: Implement folhear() method.
    }

    public function avancarPag()
    {
        $this->pagAtual++;
        // TODO: Implement avancarPag() method.
    }

    public function voltarPag()
    {
        $this->pagAtual--;
        // TODO: Implement voltarPag() method.
    }
}
