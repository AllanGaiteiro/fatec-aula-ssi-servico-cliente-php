<?php


/////////////////
$numero = 1;
/// if else


if ($numero == 10) :
    echo "esse numero é igual a 10";
elseif ($numero < 10) :
    echo "esse numero é menor q 10";
else :
    echo "esse numero é maior q 10";
endif;

echo "<hr>";


echo "esse numero é ";
echo ($numero > 10) ? "maior que 10" : "menor que 10";
///////////////////////////

//////////////////////
////switch case
$cor = "blue";
echo"<br>";
echo "sua cor preferida é ";
switch ($numero):
    case "blue":
        echo "azul";
        break;
    case "red":
        echo "vermelho";
        break;
    case "yelow":
        echo "amarelo";
        break;
    default:
        echo " voce nao digitou uma cor definida";
endswitch;
