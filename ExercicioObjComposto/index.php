<?php
    require_once "Pessoa.php";
    require_once "Livro.php";

    $p[0] = new Pessoa("João Paulo" , 22 , "M");
    $p[1] = new Pessoa("Maria" , 31 , "F");

    $l[0] = new Livro("Curso de POO","João Programador",300,$p[0]);
    $l[0] = new Livro("Curso de Java","Paulo Programador",200,$p[1]);

    print_r($l[0]->detalhes());