<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intento2</title>
</head>
<body>
    <?php
    $enlace =mysqli_connect("localhost","root","","aaa");

    if (!$enlace) {
        die("no pudo conectarse a la base de datos".mysqi_error());
    }
    echo "conexion exitosa";
 
    ?>
</body>
</html>