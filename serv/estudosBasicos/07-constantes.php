<?php
// Constantes
define("NOME", "Allan Gaiteiro");
define("IDADE", 23);
define("ALTURA", 1.77);
define("CASADO", false);

var_dump(NOME, IDADE, ALTURA, CASADO);

define("SELESOES", ['BRASIL', 'Argentina', 'Alemanha']);
echo SELESOES[0];

$titulo = 'Penta';
define(SELESOES[0], $titulo);
var_dump(SELESOES, BRASIL);


function info()
{// constantes sao globais 
    echo ' meu nome é ' . NOME . ', tenho ' . IDADE . ' anos, minha altura é de ' . ALTURA . ' metro, casado: ' . CASADO . ' .';
    echo "<hr>";
    echo BRASIL; // buguei o php kkkkkk
}
info();
?>
