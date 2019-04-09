<?php

    print"Digite o primeiro valor: \n";
    $n1 = (int) fgets (STDIN);
    print"Digite o segundo valor: \n";
    $n2 = (int) fgets (STDIN);
    print"Digite o terceiro valor: \n";
    $n3 = (int) fgets (STDIN);
    if ($n1 < $n2 and $n2 < $n3){
        print "1A ordem Decrescente é: $n3 , $n2 , $n1\n";
    }
    elseif ($n2 < $n1 and $n2 < $n3){
        print "2A ordem Decrescente é: $n3 , $n1 , $n2\n";
    }
    elseif ($n3 < $n2 and $n2 < $n1) {
        print "3A ordem Decrescente é: $n1 , $n2 , $n3\n";
    }
