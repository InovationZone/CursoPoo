<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 22:34
 */
require_once 'Video.php';
require_once 'Pessoa.php';
require_once 'Aluno.php';
require_once  'Visualizacao.php';

$v[0] = new Video("Curso de POO");
$v[1] = new Video("Curso de PHP");
$v[2] = new Video("Curso de Java");


$aluno = new Aluno('João Paulo' , 23 , 'M','joao.silva');

$vis[0] = new Visualizacao( $aluno, $v[0]);

$vis[0]->Avaliar();


echo "<pre>";
print_r($v);
print_r($aluno);
print_r($vis);
echo "</pre>";