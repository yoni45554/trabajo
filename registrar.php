
<?php
include("conexxion.php");

if (isset($_POST['register'])){

    if(strlen($_POST['name'])>=1 && strlen($_POST['email'])>=1) {
        if(strlen($_POST['name'])>=1 && strlen($_POST['email'])>=1) {
            $name = trim($_POST['name']);
            $email= trim($_POST['email']);
            $password= trim($_POST['password']);
            $hora_reg= date("d/m/y");
            $consulta= "INSERT INTO intento2 (nombre,Usuario, Contraseña,hora_reg) VALUES ('$name','$email','$password','$hora_reg')";
        
    
}}}
        

?>





