<?php

    function verificarIdade($anoNasc){
        $idade = 2024 - $anoNasc; //Conta para obter a idade
        echo "A idade é: $idade</br>";
        if($idade < 18){
            echo "Menor de idade</br>";
        }
        else{
            echo "Maior de idade</br>";
        }
    }
?>