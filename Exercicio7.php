<?php

    print"Digite o primeiro valor: \n";
    $numero1 = (int) fgets (STDIN);

    print"Digite o segundo valor: \n";
    $numero2 = (int) fgets (STDIN);

    print"Digite o terceiro valor: \n";
    $numero3 = (int) fgets (STDIN);

    if ($numero1 > $numero2 and $numero2 > $numero3){
        print "O primeiro numero é maior, e o terceiro é menor\n";
    }
    elseif ($numero1 > $numero2 and $numero3 > $numero2){
        print "O primeiro numero é maior, e o segundo é menor\n";
    }
    elseif ($numero2 > $numero1 and $numero1 > $numero3){
        print "O segundo numero é maior, e o terceiro é menor\n";
    }
    elseif ($numero2 > $numero3 and $numero3 > $numero1){
        print "O segundo numero é maior, e o primeiro é menor\n";
    }
    elseif ($numero3 > $numero2 and $numero2 > $numero1) {
        print "O terceiro numero é maior, e primeiro é menor\n";
    }
    elseif ($numero3 > $numero2 and $numero1 > $numero2) {
        print "O terceiro numero é maior, e segundo é menor\n";
    }
