<?php
    require_once "Pessoa.php";
    require_once "Aluno.php";
    require_once "Funcionario.php";
    require_once "Professor.php";


    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome('João');
    $p2->setNome('Paulo');
    $p3->setNome('Ferreira');
    $p4->setNome('Silva');

    $p2->setCurso("Informática");
    $p3->setSalario(200);
    $p4->setTrabalhando(true);



    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);




