<?php
$nome = "Allan Gaiteiro";
$a = 1;
$b = 2;
$c = 3;

// nao funciona
/*
function exibeNome(){

    echo $nome;
}
exibeNome();
*/

// funciona
function exibeNome(){
    global $nome;
    echo $nome;
}
exibeNome();
echo "<hr>";

function exibeCidade(){
    global $cidade;
    $cidade = "Rio de janeiro";
}
exibeCidade();
echo $cidade;
echo "<hr>";
/////////////////////////////

function soma(){
    echo 'Soma: ', $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();
?>