<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use InovationZone\Poo\Heranca2\Pessoa;
use InovationZone\Poo\Heranca2\Bolsista;

//nao é possivel instanciar uma classe abstrata
//$pessoa = new Pessoa();

$bolsista = new Bolsista();

$bolsista->PagarMensalidade();
