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

$keys = array_keys($nomes);
print_r($keys);
