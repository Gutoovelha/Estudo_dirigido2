<?php

    $contador = 1;

    while ($contador <= 50 ){
        if ($contador%2 == 1){
            print $contador;
        }
        print "\n";
        $contador ++; #soma mais um a variavel
        sleep (1);
    }
