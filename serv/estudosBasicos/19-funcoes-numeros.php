<?php

$db = 1234.56;

$preco = number_format($db,2,",",".");
echo "o valor do produto é RS $preco <br>";

echo "<hr>";
echo round(3.4)."<br>"; // arredondada pra cima e pra baixo
echo ceil(3.8)."<br>"; // arredonda pra baixo
echo floor(3.2)."<br>"; // aredonda pra baixo 

echo rand(1,20);// sorteio aleatoria