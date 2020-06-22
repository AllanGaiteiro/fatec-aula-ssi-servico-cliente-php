<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulario</title>
</head>

<body>
    <?php
    // validaçoes
    // funcoes (filter_input - filter_var)
    //FILTER_VALIDATE_INT
    //FILTER_VALIDATE_EMAIL
    //FILTER_VALIDATE_FLOAT
    //FILTER_VALIDATE_
    //FILTER_VALIDATE_INT
    ?>
    <form action="dados .php" method="GET">
        Nome: <input type="text" name="nome" id="">
        Email: <input type="email" name="email" id="">
        <button type="submit">Enviar</button><br>
    </form>
    <a href="dadosGET.php?idade=23&estado=solteiro">Enviar dados</a>
</body>

</html>