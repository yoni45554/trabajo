<?php
class Cconexion{
    function ConexionBD(){
        $host = 'localhost' ;
        $dbname= 'phpdb';
        $username='root' ;
        $pasword='' ;

        try {
            $conn = new PDO ("mysql:host=$host;$dbname",$username,$pasword);
            echo "Se conectó correctamente a la base de datos";
        }   catch (PDOException $exp) {
            echo ("No se logró conectar correctamente con la base de datos:$dbname, error $exp");

        }
        return $conn;
    }
    }

?>