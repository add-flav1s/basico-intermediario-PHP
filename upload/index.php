<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>

<body>
    <?php
if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos = array('png','jpg','gif','jpeg');
    $extensao = pathinfo ($_FILES['arquivo'] ['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)):
        echo 'Existe';
    else:
        echo 'Nao existe';
    endif;
endif;
?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>
</body>

</html>