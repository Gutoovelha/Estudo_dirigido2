<?php
print "Deseja Fibonacciar até quanto? \n";
$fibonacciar= (float) fgets(STDIN);

print "O valor poderá passar o digitado\n\n";
sleep (2);
$fibonacci=0;
$fibonacci_1=1;
$fibonacci_2=0;

while  ($fibonacci_2<$fibonacciar)
    {$fibonacci_2=$fibonacci+$fibonacci_1;

     print "$fibonacci_2 ";
     $fibonacci= $fibonacci_1;
     $fibonacci_1= $fibonacci_2;}
