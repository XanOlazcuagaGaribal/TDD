<?php declare(strict_types=1);

class PrimeFactors{
    /*Exercice 2
    ==========

    L'objectif est d'écrire une méthode permettant de calculer les facteurs 
    premiers d'un nombre entier positif passé en paramètre. Cette liste devra
    être triée par ordre croissant.

    Un nombre premier est un nombre entier supérieur ou égal à deux qui a
    exactement deux diviseurs : 1 et lui-même.*/

    public static function generate(int $number): array{
        $array = [];

        /*if($number > 1){
            while($number % 2 === 0){
                $array[] = 2;
                $number /= 2;
            }
            if($number > 1){
                $array[] = $number;
            }
        }*/

        for($potentialDivider = 2; $potentialDivider <= $number; ++$potentialDivider){
            while($number % $potentialDivider === 0){
                $array[] = $potentialDivider;
                $number /= $potentialDivider;
            }
        }

        return $array;
    }
}