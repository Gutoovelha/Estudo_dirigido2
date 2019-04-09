<?php

    print "Digite o preço do primeiro produto:\n";
    $numero1 =(float) fgets(STDIN);

    print "Digite o preço do segundo produto:\n";
    $numero2 =(float) fgets(STDIN);

    print "Digite o preço do terceiro produto:\n";
    $numero3 =(float) fgets(STDIN);

    if($numero1<$numero2 and $numero1<$numero3 ){
        print "Você deve comprar o primeiro produto.\n";       

    }

    if($numero2<$numero1 and $numero2<$numero3) { 
        print "Você deve comprar o segundo produto.\n";    
    }

    if($numero3<$numero2 and $numero3<$numero1) { 
        print "Você deve comprar o terceiro produto.\n";    
    }
