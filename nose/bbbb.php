<?php
$inc =include("conexxion.php");
if ($inc) {
    $consulta ="SELECT * From audifonos";

    $resultado = mysqli_query($enlace,$consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()){
            $ID=$row['ID'];
            $Marca=$row['Marca'];
            $Audifonos= $row['Audifonos'];
            $Precio = $row['Precio'];
            $Compatibilidad = $row['Compatibilidad'];
            ?>
            <div>
                <h2><?php echo $Marca; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $ID; ?><br>
                        <b>Marca: </b> <?php echo $Marca; ?><br>
                        <b>Audifonos: </b> <?php echo $Audifonos; ?><br>
                        <b>Precio: </b> <?php echo $Precio; ?><br>
                        <b>Compatibilidad: </b> <?php echo $Compatibilidad; ?>
                    </p>
                </div>
            </div>
            <?php
        }
    }
}

