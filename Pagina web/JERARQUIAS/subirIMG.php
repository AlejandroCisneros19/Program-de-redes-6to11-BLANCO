<?php

include('../BD/db.php');

$file_name= $_FILES["file"]["name"];
$file_tmp = $_FILES["file"]["tmp_name"];
$desc = $_POST["desc"];
$route = "../IMG/".$file_name;


move_uploaded_file($file_tmp, $route);

$sql = "INSERT INTO archivos (titulo, DESCRIP) VALUES ('$file_name','$desc')";

$sql_query = mysqli_query($conexion, $sql);
echo '<script>alert("Se cargo el archivo con exito")</script>';

?>
<br>
<body>
    <a href= "../VentanaCliente.php" class = "botton_exit"><button>volver</button></a>
</body>