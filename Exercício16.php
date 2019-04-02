<?php

    print "Digite o primeiro número: \n"; 
    $numero1 = (int) fgets (STDIN);

    print "Digite o segundo número: \n"; 
    $numero2 = (int) fgets (STDIN);

    print "Digite o terceiro número: \n"; 
    $numero3 = (int) fgets (STDIN);

    print "Digite o quarto número: \n"; 
    $numero4 = (int) fgets (STDIN);

    print "Digite o quinto número: \n"; 
    $numero5 = (int) fgets (STDIN);

    $soma = $numero1 + $numero2 + $numero3 + $numero4 + $numero5;
    $media = ($numero1 + $numero2 + $numero3 + $numero4 + $numero5)/5;

    Print " a soma dos 5 números é: $soma. \n";
    print " a média dos 5 números é: $media. \n";