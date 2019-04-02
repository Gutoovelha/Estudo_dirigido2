<?php

    print "Vamos resolver as raizes de uma equação de segundo grau (ax2 + bx + c)\n";

    print "Digite o valor de a: \n";
    $valora =  fgets (STDIN);

    print "Digite o valor de b: \n";
    $valorb = fgets (STDIN);

    print "Digite o valor de c: \n";
    $valorc = fgets (STDIN);

        $delta = $valorb**2 - 4 * $valora * $valorc;
        $x1 = (-$valorb + (sqrt($delta))) / 2*$valora;
        $x2 = (-$valorb - (sqrt($delta))) / 2*$valora;

    if ($valora == 0){
        print "A equação não é de segundo grau!\n";
        exit; 
    }
    elseif ($delta < 0){
        print "A equação não possui raizes reais\n";
        exit;
    }
    elseif ($delta == 0){
        print "A equação possui apenas uma raiz real. Cujo valor é: $delta \n";
    }
    elseif ($delta < 0) {
        "A equação possui duas raizes rais, com valores, x' = $x1 e x'' = $x2 . \n";
    }