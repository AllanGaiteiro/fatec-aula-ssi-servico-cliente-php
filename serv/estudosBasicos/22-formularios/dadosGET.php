<?php

$nome = $_GET['nome'];
$email = $_GET['email'];
$idade = $_GET['idade'];
$estado = $_GET['estado'];

echo "Meu nome é $nome tenho $idade, e estou $estado <br>";
echo "meu email é $email <br>";

///////////////
echo $_GET['idade']."<br>".$_GET['estado']."<br>".$_GET['aaa'];

var_dump($_GET);