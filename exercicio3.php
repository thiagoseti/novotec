<?php

    /**
     * Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. Se o valor da 
     * soma for negativo o método deverá retornar o valor 0.
     */

     function soma($v1, $v2){
        $soma = $v1 + $v2;
        if($soma < 0){
            $res = 0;
        }
        else{
            $res = $soma;
        }
        return $res;
     }

     echo "O resultado é: " . soma(-10, -5) . "</br>"; //Chamada da função
     echo "O resultado é: " . soma(10, 5) . "</br>";

?>