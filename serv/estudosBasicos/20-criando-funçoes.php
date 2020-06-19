<?php

function exibirNome($nome){
    echo "Meu nome é $nome";
}



exibirNome("Allan");


echo "<hr>";

function media($n1,$n2,$n3){
    return ($n1 + $n2 + $n3)/3;
}


$nome = "Allan";
$n1 = 5;
$n2 = 8;
$n3 = 9;

$estado = (media($n1,$n2,$n3) < 6)? "reprovado": "aprovado";

echo "o aluno $nome teve uma media de ".media($n1,$n2,$n3)." e foi $estado";