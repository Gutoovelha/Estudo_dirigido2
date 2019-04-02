<?php

    $contador = 1;

    while ($contador <= 50 ){
        if ($contador%2 == 1){
            print $contador;
        }
        print "\n";
        $contador ++; 
        sleep (1);
    }
print "Acabou a repetição";
