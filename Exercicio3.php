<?php
Print "Digite M para masculino ou digite F para feminino\n";
$sexo=fgetc(STDIN);
if ($sexo=="M"){
    Print "Masculino\n";
}
elseif ($sexo=="F"){
    Print "Feminino\n";
}
else  {print "Sexo inválido\n";}
