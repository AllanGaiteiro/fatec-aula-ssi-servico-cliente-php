<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario</title>
</head>
<body>
    <form action="dadosGET.php" method="GET">
        Nome: <input type="text" name="nome" id="">
        Email: <input type="email" name="email" id="">
        <button type="submit">Enviar</button><br>
    </form>
    <a href="dadosGET.php?idade=23&estado=solteiro">Enviar dados</a>
</body>
</html>