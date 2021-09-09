<?php declare(strict_types=1);

class TestString{
    /*Exercice 3
    ==========

    L'objectif est d'écrire une fonction qui prend une chaine de caractères en
    paramètre et vérifie que si celle-ci contient des parenthèses, ces parenthèses
    sont "équilibrées". Dans cet exercice, des parenthèses sont dites équilibrées
    si :
    - il y a autant de parenthèses ouvrantes que de parenthèses fermantes
    - les parenthèses fermantes n'apparaissent qu'après avoir été "ouvertes"

    Par exemple, les chaines suivantes devraient être jugées équilibrées :
    - ""
    - "()"
    - "(foo(bar))"
    - "foo"

    alors que celles-ci ne le sont pas :
    - "((foo)"
    - "())"
    - ")(()"

    Vous devez implémenter cette fonction, ainsi que la classe de test contenant
    toutes les assertions permettant de garantir son bon fonctionnement.*/

    public static function testStringContains(string $text){
        $string = str_split($text);
        $open_count = 0;

        for ($i = 0; $i < sizeof($string); $i++){
            if($string[$i] === '('){
                $open_count += 1;
            }
            if($string[$i] === ')'){
                if($open_count < 1){
                    return false;
                }
                else {
                    $open_count -= 1;
                }
                $open_count += 1;
            }
        }
        return true;
    }
}