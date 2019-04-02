<?php

    print"Digite o primeiro valor: \n";
    $valor1 = (int) fgets (STDIN);

    print"Digite o segundo valor: \n";
    $valor2 = (int) fgets (STDIN);

    print"Digite o terceiro valor: \n";
    $valor3 = (int) fgets (STDIN);

    if ($valor1 > $valor2 and $valor2 > $valor3){
        print "O primeiro valor é maior, e o terceiro é menor\n";
    }
    elseif ($valor1 > $valor2 and $valor3 > $valor2){
        print "O primeiro valor é maior, e o segundo é menor\n";
    }
    elseif ($valor2 > $valor1 and $valor1 > $valor3){
        print "O segundo valor é maior, e o terceiro é menor\n";
    }
    elseif ($valor2 > $valor3 and $valor3 > $valor1){
        print "O segundo valor é maior, e o primeiro é menor\n";
    }
    elseif ($valor3 > $valor2 and $valor2 > $valor1) {
        print "O terceiro valor é maior, e primeiro é menor\n";
    }
    elseif ($valor3 > $valor2 and $valor1 > $valor2) {
        print "O terceiro valor é maior, e segundo é menor\n";
    }
