<?php
/// repetiçao 

$contador = 1;


////// na aula 
while ($contador <= 10):
    /*so repete se acondiçao for atentida desde a primeira rodada*/
    echo "contador é $contador <br>";
    $contador++;
endwhile;

/// no padrao 
while ($contador <= 20){
    /*so repete se acondiçao for atentida desde a primeira rodada*/
    echo "contador é $contador <br>";
    $contador++;
}

do{
    /*executa primeiro e fas a verificaçao depois */
$contador--;
echo "contador é $contador <br>";
}while($contador > 0);