<?php declare(strict_types=1);

use phpDocumentor\Reflection\Types\Boolean;

class ExoTDD
{
    /*Exercice 1
    ==========

    L'objectif est de compléter une fonction permettant de déterminer si l'année
    passée en paramètre est bissextile ou non. Une année bissextile est divisible
    par 4 mais pas par 100, sauf si elle est également divisible par 400.*/
    
    public static function exo1(int $annee){
        $b = false;

        if($annee % 400 === 0){
            $b = true;
        }
        else if($annee % 100 === 0){
            $b = false;
        }
        else if($annee % 4 === 0){
            $b = true;
        }
        else{
            $b = false;
        }

        return $b;

    }
}