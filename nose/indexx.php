<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
        <h1>Crear cuenta</h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="email" name="email" placeholder=" Email">
        <input type="password"name="password" placeholder="Contraseña">
        
        <h4>Género</h4>
        <div class="form-check">
            <input class ="form-check" input type="radio" name="genero"
                value="masculino" >
                <label class= "form-check-label" for="masculino">
                    Masculino
                </label>
        </div>
        <div class="form-check">
            <input class ="form-check" input type="radio" name="genero"
            value="femenino" >
            <label class= "form-check-label" for="femenino">
                Femenino
            </label>
        <div class="form-check">
            <input class ="form-check" input type="radio" name="genero"
                value="otro" >
                <label class= "form-check-label" for="otro">
                    Otro
                </label>
        </div>
        <input type="submit"  name="register">
    </form>
        <?php  
        include("registrar.php");
        ?>
    
</body>
</html>