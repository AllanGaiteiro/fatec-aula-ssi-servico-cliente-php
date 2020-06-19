<?php

// funçoes para strings


$nome = "allan gaiteiro";
echo "$nome <br>";

$nomeMaiusculo = strtoupper($nome);
echo "$nomeMaiusculo <br>";

$nomeMinusculo = strtolower($nomeMaiusculo);
echo "$nomeMinusculo <br>";

echo "<hr>";

$mensagem = "ola mundo";

echo substr($mensagem,4/*comeco*/,3/*fim */);//4 comeca em 4 

echo "<hr>";

$objeto = "mouse";

/*
$objeto = $objeto."sdss";

$objeto = str_pad($objeto, 9, "sdss",);
*/
echo $objeto;

echo "<hr>";

// repete
$string = str_repeat("Sucesso!", 5);
echo $string;

echo "<hr>";

//fala quantos caracteres tem 
$mensagem = "Ola mundo";
echo strlen($mensagem);

echo "<hr>";

$texto = "A seleçao Argentina sera campea da copa do mundo 2018.";
echo "$texto <br>";
$texto = str_replace("Argentina","Brasileira", $texto);
echo "$texto <br>";

echo "<hr>";

echo strpos($texto, "copa");