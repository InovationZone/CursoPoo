<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 08/09/2018
 * Time: 20:12
 */

namespace InovationZone\Poo\Heranca2;

class Bolsista extends Aluno
{
    private $bolsa;

    //metodo que é sobrescrito
    public function PagarMensalidade() {
        echo "bolsista paga com desconto" ;
    }
}