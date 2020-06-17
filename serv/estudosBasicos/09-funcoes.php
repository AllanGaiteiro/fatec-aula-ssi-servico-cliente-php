<?php


//is_array
$nomes = array("Allan", "Isabela", "Carlos", "Eliza");

//echo is_array($nomes);1 verdade /0 false
var_dump(is_array($nomes));

if (is_array($nomes)) :
    echo "é um array<br>";
else :
    echo "nao é array<br>";
endif;

///////////////////
//in_array

echo in_array("Allan", $nomes);

echo "<br>";
if (in_array("Allan", $nomes)) :
    echo "esta no array<br>";
else :
    echo "nao esta no array<br>";
endif;

///////////////////
//keys

$keys = array_keys($nomes);/// armazena a key/ indice;
print_r($keys);
echo "<br>";


////////////////////////////
///Values

$values = array_values($nomes);// armazena o valor
print_r($values);
echo "<br>";

////////////////////
///merge
$nomes2 = array("lucas","Ricardo","Augusto","Alex");

$nomeCompleto = array_merge($nomes,$nomes2);// jutas os arrays 
print_r($nomeCompleto);

////////////////
///pop
echo "<br>";
echo "o ultimo nome era ".array_pop($nomes2);/// exclui o ultimo elemento do array
echo "<br>";
print_r($nomes2);
echo "<br>";
///////////////
///shift

echo "<br>";
echo "o primeiro nome era ".array_shift($nomes2);/// exclui o ultimo elemento do array
echo "<br>";
print_r($nomes2);
echo "<br>";

//////////////// 
/////unshift
$frutas = array("uva","laranja","maçã");
print_r($frutas);
echo "<br>";
echo array_unshift($frutas, "manga","acerola");// acrecenta no começo do array 
echo "<br>";

///////////////
////push
print_r($frutas);
echo "<br>";
echo array_push($frutas, "abacate","cereja");// acrecenta no começo do array 
echo "<br>";

//////////////////
////combine
$idade = array(23,20,21,26);
$cobinar = array_combine($values,$idade); //cria um array mesclando dois array o primeiro sera o indice/key e o segundo o value
print_r($cobinar);
echo "<br>";

//////////////
////sum
$soma = array(2,2,1,3,5);
print_r($soma);

echo "soma desse array é ".array_sum($soma);
echo "<br>";

////////////////////
//////explode 

$data = "17/06/2020";

$data = explode("/", $data);// tranforma string em array 
print_r($data);
echo "<br>";
$dataSlot = array("dia","mes","ano");
$data = array_combine($dataSlot,$data);
print_r($data);
echo "<br>";

/////////////////////
///inplode

$data = implode("/", $data);//// array pra string
print_r($data);


