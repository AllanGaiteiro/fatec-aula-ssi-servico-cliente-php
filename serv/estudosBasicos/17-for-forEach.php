<?php

$i;
for ($contador = 0; $contador <= 10; $contador++){
    echo "o contador esta em  $contador <br>";
    $i = $contador;
}
//echo $i;
for ($contador = $i; $contador <= $i + 10; $contador++):
    echo "o segundo contador esta em  $contador <br>";
endfor;

echo "<hr>";

$cores = array("verde", "Vermelho","Azul");

foreach($cores as $indice => $valor):
    echo $indice."=>".$valor."<br>";
endforeach;