<?php
include("conexxion.php");

if (isset($_POST['register'])){

    if(strlen($_POST['Usuario'])>=1 && strlen($_POST['Contraseña'])>=1) {
        $Usuario = trim($_POST['name']);
        $Contraseña= trim($_POST['Contraseña']);
        $fechareg = date("d/m/y");
        $consulta= "INSERT INTO intento1 (Usuario, Contraseña) VALUES ('$Usuario','$Contraseña','$')";
        

        $resultado = mysqli_query($enlace,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok"> </h3>
            <?php
        }else {
            ?>
            <h3 class="bad">  </h3>
            <?php
        }
    }
        else{
            ?>
            <h3 class="bad"></h3>
            <?php
    }
    }
            

?>






