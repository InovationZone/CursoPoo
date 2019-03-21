<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 22:34
 */
require_once __DIR__ . "/../../vendor/autoload.php";


use InovationZone\Poo\Projeto\Visualizacao;
use InovationZone\Poo\Projeto\Video;
use InovationZone\Poo\Projeto\Aluno;

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