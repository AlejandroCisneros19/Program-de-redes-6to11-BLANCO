<?php
include("../BD/db.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM archivos WHERE id='$id' "; 


/*eliminar datos*/

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if ($resultadoEliminar){
    header("Location: ../VentanaAdmin.php");
}else {
    echo "<script>alert('No se ha podido realizar la operacion')</script>"; 
}

?>