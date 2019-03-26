<?php

Print "\nDigite a sua primeira nota:\n";
$P_nota=(float)fgets(STDIN);

Print "\nDigite a sua segunda nota:\n";
$S_nota=(float)fgets(STDIN);

$media=($S_nota + $P_nota)/2;


if ($media >= 7){
    Print "\nSua nota foi $media, aluno aprovado";
}
else {
    Print "\nSua nota foi $media, aluno reprovado";
}
if ($media = 10){
    Print "\nO aluno tirou $media na media, por isso, foi aprovado com distinçao\n";
}
else{
    Print "\nO aluno tirou $media na media, por isso, não foi aprovado com distinção\n";
}

