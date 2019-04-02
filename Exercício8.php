<?php

    print"Digite o preço do primeiro produto: \n";
    $valor1 = (int) fgets (STDIN);

    print"Digite o preço do segundo produto: \n";
    $valor2 = (int) fgets (STDIN);

    print"Digite o preço do terceiro produto: \n";
    $valor3 = (int) fgets (STDIN);

    if ($valor1 < $valor2 and $valor2 < $valor3){
        print "O primeiro produto está mais em conta\n";
    }
    elseif ($valor2 < $valor1 and $valor1 > $valor3){
        print "O segundo produto está mais em conta\n";
    }
    elseif ($valor3 < $valor2 and $valor2 < $valor1) {
        print "O terceiro produto está mais em conta\n";
    }