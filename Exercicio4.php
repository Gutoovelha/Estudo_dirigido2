<?php
print "Digite alguma letra:\n ";
$letra=fgetc(STDIN);

if ($letra =="A" or $letra=="E" or $letra=="I" or $letra=="O" or $letra=="U"){

print "\nEssa letra é uma vogal\n";
}

else {
    print "\nEssa letra é uma consoante\n";
}
