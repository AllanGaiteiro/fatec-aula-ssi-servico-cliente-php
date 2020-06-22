<?php

//Superglobais
/*
$GLOBALS /////////////
$_SERVER ////////////
$_POST
$_GET
$_FILES
$_ENV
$_REQUEST
$_COOKIE
$_SESSION
*/

/// $GLOBALS ////
$x = 10;
$y = 15;

function soma(){

    echo $GLOBALS['x']+ $GLOBALS['y'];
     
}soma();
echo "<hr>";

///_$SERVER //// um arrai com varios indices /// consultar pra saber mais
echo "<hr>";
echo $_SERVER['PHP_SELF']."<br>";// nome do escripe em execusao
echo $_SERVER['SERVER_NAME']."<br>";// nome do host
echo $_SERVER['SCRIPT_FILENAME']."<br>";// caminho absoluto do script em execusao
echo $_SERVER['DOCUMENT_ROOT']."<br>";// diretorio raiz do script 
echo $_SERVER['SERVER_PORT']."<br>";// porta  do servidor WEBB
echo $_SERVER['REMOTE_ADDR']."<br>";// endereço do usuario
echo "<hr>";
echo "<hr>";
