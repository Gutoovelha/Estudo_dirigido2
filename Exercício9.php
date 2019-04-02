<?php

    print"Digite o primeiro valor: \n";
    $n1 = (int) fgets (STDIN);

    print"Digite o segundo valor: \n";
    $n2 = (int) fgets (STDIN);

    print"Digite o terceiro valor: \n";
    $n3 = (int) fgets (STDIN);

    if ($n1 < $n2 and $n2 < $n3){
        print "A ordem crescente é: $n1 , $n2 , $n3\n";
    }
    elseif ($n2 < $n1 and $n1 < $n3){
        print "A ordem crescente é: $n2 , $n1 , $n3\n";
    }
    elseif ($n3 < $n2 and $n2 < $n1) {
        print "A ordem crescente é: $n3 , $n2 , $n1\n";
    }
