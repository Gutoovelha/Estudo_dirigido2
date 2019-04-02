<?php

    print"Digite o primeiro valor: \n";
    $valor1 = (int) fgets (STDIN);

    print"Digite o segundo valor: \n";
    $valor2 = (int) fgets (STDIN);

    print"Digite o terceiro valor: \n";
    $valor3 = (int) fgets (STDIN);

    if ($valor1 < $valor2 and $valor2 < $valor3){
        print "A ordem crescente é: $valor1 , $valor2 , $valor3\n";
    }
    elseif ($valor2 < $valor1 and $valor1 < $valor3){
        print "A ordem crescente é: $valor2 , $valor1 , $valor3\n";
    }
    elseif ($valor3 < $valor2 and $valor2 < $valor1) {
        print "A ordem crescente é: $valor3 , $valor2 , $valor1\n";
    }