<?php
$inc =include("conexxion.php");
if ($inc) {
    $consulta ="SELECT * From monitor";

    $resultado = mysqli_query($enlace,$consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()){
            $ID=$row['ID'];
            $Marca=$row['Marca'];
            $Monitor= $row['Monitor'];
            $Precio = $row['Precio'];
            $Tasaderefesco = $row['Tasa de refresco (Hz)'];
            ?>
            <div>
                <h2><?php echo $Marca; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $ID; ?><br>
                        <b>Marca: </b> <?php echo $Marca; ?><br>
                        <b>Monitor: </b> <?php echo $Monitor; ?><br>
                        <b>Precio: </b> <?php echo $Precio; ?><br>
                        <b>Tasa de refesco: </b> <?php echo $Tasaderefesco; ?>
                    </p>
                </div>
            </div>
            <?php
        }
    }
}

