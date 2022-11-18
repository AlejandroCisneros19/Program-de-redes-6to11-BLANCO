<?php

include("db.php");

$file_name= $_FILES["file"]["name"];
$file_tmp = $_FILES["file"]["tmp_name"];
$aut = $_POST["aut"];
$desc = $_POST["desc"];
$route = "IMG/".$file_name;


move_uploaded_file($file_tmp, $route);

$sql = "INSERT INTO archivos (autor, titulo, DESCRIP) VALUES ('$aut','$file_name','$desc')";

$sql_query = mysqli_query($conexion, $sql);
echo '<script>alert("Se subio con exito")</script>';

?>

<body>
        <a href= "VentanaCliente.php" class = "botton_return"><button>volver</button></a>
</body>