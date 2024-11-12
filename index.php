<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basededatos = "registro";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $basededatos);
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Formulario</title>
        </head>
    <body>

            <form action="#" name="registro" method="post">

            <input type="text" name="nombre" placeholder="nombre">
            <input type="email" name="correo" placeholder="correo">
            <input type="text" name="contraseña" placeholder="contraseña">

            <input type="submit" name="registro">
            <input type="reset">
        </form>
    </body>
</html>
    <?php
    if(isset($_POST['registro'])){

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        $insertardatos = "INSERT INTO registro VALUES ('$nombre', '$correo', '$contraseña', '')";

    }

    ?>