<?php
print "Digite o primeiro número: ";
$num1= (float) fgets(STDIN);
print "Digite o segundo número:  ";
$num2= (float) fgets(STDIN);
print "Digite o terceiro número: ";
$num3= (float) fgets(STDIN);
print "Digite o quarto número:   ";
$num4= (float) fgets(STDIN);
print "Digite o quinto número:   ";
$num5= (float) fgets(STDIN);
if ($num1>$num2 && $num1>$num3 && $num1>$num4 && $num1>$num5) 
    {print "O primeiro número é o maior";}
if ($num2>$num1 && $num2>$num3 && $num2>$num4 && $num2>$num5) 
    {print "O segundo número é o maior";}
if ($num3>$num1 && $num3>$num2 && $num3>$num4 && $num3>$num5) 
    {print "O terceiro número é o maior";}
if ($num4>$num1 && $num4>$num2 && $num4>$num3 && $num3>$num5) 
    {print "O quarto número é o maior";}
if ($num5>$num1 && $num5>$num2 && $num5>$num3 && $num5>$num4) 
    {print "O quinto número é o maior";}
