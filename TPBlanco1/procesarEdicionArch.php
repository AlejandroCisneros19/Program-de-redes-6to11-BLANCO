<?php
session_start();
if ($_SESSION["cargo"] == 1){
    include("DatosSubidos.php");

$id = $_POST['id'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$descrip = $_POST['descrip'];


/*actualizar datoss*/

$actualizar = "UPDATE archivos SET autor = '$autor', titulo = '$titulo', descrip = '$descrip' WHERE id='$id' ";

    $resultado=mysqli_query($conexion,$actualizar);

    if ($resultado){
        echo "<script>alert('Si han actualizado los datos, actualice la pagina para ver los cambios')</script>";
    }
    else{
        echo "<script>alert('Nu se ha podido actualizar los datos')</script>"; 
    }

}
?>