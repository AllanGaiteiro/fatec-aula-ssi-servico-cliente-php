<?php
/*********Escalares ************/
////// string
$nome = "Allan";
var_dump($nome);
if(is_string($nome)):
    echo "é uma string";
else:
    echo "nao é uma string";
endif;
echo "<hr>";

/////// int
$idade = 23;
var_dump($idade);
if (is_int($idade)):
    echo "é um inteiro";
else:
    echo " nao é inteiro";
endif;
echo "<hr>";

/////// float
$altura = 1.77;
var_dump($altura);
if (is_float($altura)):
    echo "é um float";
else:
    echo " nao é float";
endif;
echo "<hr>";

////// boolean
$admin = false;
var_dump($admin);
if (is_bool($altura)):
    echo "é um bolean";
else:
    echo " nao é bolean";
endif;
echo "<hr>";

/************* Compostos **************/
$carros = array("Gol","Uno","Camaro",12,1.5,true);
var_dump($carros);

if (is_array($carros)):
    echo "é um array";
else:
    echo " nao é array";
endif;
echo "<hr>";

/*************** Object **************/
echo "<hr>";
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$client = new Cliente();
$client->atribuirNome("allan");
var_dump($client);


if (is_object($client)):
    echo "é um object";
else:
    echo " nao é object";
endif;

echo "<hr>";
$cidade = NULL;
var_dump($cidade);

?>