<?php

Print "\nColoque o primeiro valor:\n";
$numero1=fgets(STDIN);

Print "\nColoque o segundo valor:\n";
$numero2=fgets(STDIN);


if ($numero2 > $numero1){
    print"\nO numero maior é $numero1\n";

}elseif ($numero1 > $numero2){
    print"\nO numero maior é $numero2\n";
}
