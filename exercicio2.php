<?php
    /**
     * Crie uma função que receba dois valores reais como argumentos e 
     * retorne o valor da raiz quadrada da soma dos quadrados.
     */

     function exercicio2($v1, $v2){
        $soma = ($v1 * $v1) + ($v2 * $v2); // (10,5 * 10,5) + (6,2 * 6,2) = 110,25 + 38,44 = 148,69
        $raiz = sqrt($soma); //sqrt faz a raiz quadrada
        echo "A soma dos quadrados é: $soma e a raiz é $raiz</br>";
     }

     exercicio2(10.5, 6.2); //Chamada da função  
     exercicio2(2.2, 2.4);  //Chamada da função
?>