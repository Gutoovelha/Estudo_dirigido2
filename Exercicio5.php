<?php
Print "Digite a sua primeira nota:\n";
$Primeira_n=(float)fgets(STDIN);

Print "\nDigite a sua segunda nota:\n";
$Segunda_n=(float)fgets(STDIN);

$media=($Segunda_n + $Primeira_n)/2;
if ($media >= 7){
    Print "\nSua nota foi $media, aluno aprovado\n";
}

else {
    Print "\nSua nota foi $media, aluno reprovado\n";
}

if ($media == 10){
    Print "\nO aluno tirou $media na media, por isso, foi aprovado com distinçao\n";
}

else{
    Print "\nO aluno tirou $media na media, por isso, não foi aprovado com distinção\n";
}

