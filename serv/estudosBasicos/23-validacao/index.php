<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulario</title>
    <style>
        input {
            display: block;
        }
    </style>
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


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Idade: <input type="text" name="idade" id="">
        Email: <input type="text" name="email" id="">
        Peso: <input type="text" name="peso" id="">
        IP: <input type="text" name="ip" id="">
        url: <input type="text" name="url" id="">

        <button type="submit" name="enviar-form">Enviar</button><br>
    </form>
        <?php
    // isset // existe
    if(isset($_POST['enviar-form'])):// se existir o paramentoro na super global post
        //echo "Enviou <br>";
        var_dump($_POST);// ve como strin os posts
        $erros = array();
        //$idade = $_POST['idade'];
        //$email = $_POST['email'];
        if(!$idade = filter_input(INPUT_POST,'idade', FILTER_VALIDATE_INT)):// esquisito 
            $erros[] = "idade precisa ser um inteiro";
        endif;

        if(!empty($erros)):// se a variavel esta vazia
            foreach($erros as $indice => $erro):
                echo "<li>ERROR $indice: $erro <li>";
            endforeach;
        else:
            echo "Parabéns, seus dados estão corretos";
        endif;
        print_r((!empty($erros))? $erros : null);// meu jeito
    endif; 
    ?>
</body>

</html>