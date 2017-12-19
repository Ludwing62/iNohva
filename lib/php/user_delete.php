<?php
include("../../controller/connection.php");
$conexion=Conectarse();

$ID = (int) $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM users WHERE id_user =$ID";

if ($conexion->query($sql) === TRUE) {
    echo "Borrado Exitosamente";
} else {
    echo "Error al borrar: " . $conexion->error;
}

$conexion->close();
?>
