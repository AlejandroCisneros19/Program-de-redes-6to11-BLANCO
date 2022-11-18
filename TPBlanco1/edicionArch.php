<?php
session_start();
if ($_SESSION["cargo"] == 1){
    include("DatosSubidos.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel = "stylesheet" href= "estilos.css">
</head>


<body>
    <?php
        echo "<h1> Bienvenido $_SESSION[usuario]</h1>";
    ?>

    <br>

    <div class = "table__titulo"> IMAGENES SUBIDAS A LA BASE DE DATOS </div>

    <form class = "table_edit" action = "procesarEdicionArch.php" method= "post">
        <tr>
            <td>id</td>
            <td>autor</td>
            <td>titulo</td>
            <td>descrip</td>
        </tr>

        <?php
            $id = $_GET['id'];
            $sql = "SELECT*FROM archivos WHERE id ='$id' ";
            $resultado = mysqli_query($conexion, $sql);

            while($mostrar= mysqli_fetch_array($resultado)){
        ?>  
        <br>
        <tr>
        <input type="hidden" value = "<?php echo $mostrar['id'] ?>" name = "id">
        <input type="text" value = "<?php echo $mostrar['autor'] ?>" name = "autor">
        <input type="text" value = "<?php echo $mostrar['titulo'] ?>" name = "titulo">
        <input type="text" value = "<?php echo $mostrar['descrip'] ?>" name = "descrip">
        <input type="submit" value="Actualizar" name="Actualizar">
        </tr>

        <?php
    }
}
        ?>

        
    </form>
</body>

<body>
        <a href= "exit.php" class = "botton_exit"><button>cerrar sesion</button></a>
        </body>