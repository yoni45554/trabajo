<?php
$inc =include("conexxion.php");
if ($inc) {
    $consulta ="SELECT * From intento1";

    $resultado = mysqli_query($enlace,$consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()){
            $id=$row['id'];
            $nombre=$row['nombre'];
            $email= $row['email'];
            $fechareg = $row['fecha_reg'];
            ?>
            <div>
                <h2><?php echo $nombre; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $id; ?><br>
                        <b>Email: </b> <?php echo $email; ?><br>
                        <b>Fecha Registro: </b> <?php echo $fechareg; ?>
                    </p>
                </div>
            </div>
            <?php
        }
    }
}


