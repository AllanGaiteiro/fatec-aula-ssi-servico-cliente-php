<?php

// Operadores logicos 
$idade = 25;
$nome = "allan";


//////////////////
echo "<br>";
///////////////////
/// e ( && - and)

echo ($idade == 23 && $nome == "allan")? "sou eu":"nao sou eu";
$idade = 23;
echo "<br>";
echo ($idade == 23 and $nome == "allan")? "sou eu":"nao sou eu";

//////////////////
echo "<br>";
///////////////////
/// ou (|| - or)

$idade = 25;
echo ($idade == 23 || $nome == "allan")? "sou eu":"nao sou eu";
echo "<br>";
echo ($idade == 23 or $nome == "allan")? "sou eu":"nao sou eu";

//////////////////
echo "<br>";
///////////////////
/// ou exclusivo (xor) nao pode ser dois verdadeiros 
$idade = 23;
echo ($idade == 23 xor $nome == "allan")? "sou eu":"nao sou eu";
echo "<br>";

//////////////////
echo "<br>";
///////////////////
///negaçao !
$idade = 23;
echo (!$idade == 23 || !$nome == "allan")? "sou eu":"nao sou eu";
echo "<br>";


//////////////////
echo "<br>";