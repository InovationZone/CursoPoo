<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 08/09/2018
 * Time: 20:10
 */

namespace InovationZone\Poo\Heranca2;

class Aluno
{
    private $matricula;
    private $curso;

    //método pode ser sobrescrito por bolsista
    public function PagarMensalidade(){
        echo "paga valor integral";
    }
}