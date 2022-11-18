<?php
session_start();
if ($_SESSION["cargo"] == 2){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventana Cliente</title>
    <link rel = "stylesheet" href= "estilos.css">
</head>


<body>
        <?php
            echo "<h1> Bienvenido $_SESSION[usuario]</h1>";
        ?>
 
    <form action="subirIMG.php" method="POST" enctype="multipart/form-data">
        <label for="file">Seleccione imagen</label><br>
        <input type="file" id="file"name="file"><br>

        <label for="autor">Autor</label><br>
        <input type="text" id="aut"name="aut"><br>
        
        <label for="descrip">Descripcion de la imagen</label><br>
        <input type="text" id="desc" name="desc"><br>

        <input type="submit" value="subir" name="subir">
    </form>
    <br>
</body>

<body>
        <a href= "exit.php" class = "botton_exit"><button>cerrar sesion</button></a>
</body>

</html>




<?php
}
else{
    header("Location: inicio.php");
}
?>
