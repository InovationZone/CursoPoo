<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 09/09/2018
 * Time: 21:39
 */

require_once "Mamifero.php";
class Cachorro extends Mamifero
{
    public function enterrarOsso() {
        echo "Osso enterrrado";
    }

    public function abanarRabo() {
        echo "abanando rabo";
    }

    //sobrecargam
    //php nao da suporte a sobrecarga, então os métodos foram nomeados de forma diferente
    public function reagirFrase($frase) {
        if($frase == "Olá" || $frase == "toma comida") {
            echo "Abanar e latir";
        } else {
            echo "ronar";
        }
    }


    public function reagirDono($dono) {
        if($dono) {
            echo "abanar o rabo";

        }else {
            echo "latir";
        }
    }






}