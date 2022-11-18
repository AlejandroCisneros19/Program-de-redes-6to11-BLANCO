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
    <title>Ventana Admin</title>
    <link rel = "stylesheet" href= "estilos.css">
</head>


<body>
    <?php
        echo "<h1> Bienvenido $_SESSION[usuario]</h1>";
    ?>

    <br> 

    <div class = "table__titulo"> IMAGENES SUBIDAS A LA BASE DE DATOS </div>

    <div class = "table">
        <tr>
            <th>id</th>
            <th >autor</th>
            <th >titulo</th>
            <th >descrip</th> 
        </tr>
  
        <?php
            $sql = "SELECT*FROM archivos";
            $resultado = mysqli_query($conexion, $sql);

            while($mostrar= mysqli_fetch_array($resultado)){
        ?>  
        <br>
        <tr>
          <th><?php echo $mostrar['id'] ?></th> 
          <th><?php echo $mostrar['autor'] ?></th> 
          <th><?php echo $mostrar['titulo'] ?></th> 
          <th><?php echo $mostrar['descrip'] ?></th> 
          <div class = "table__item">
            <a href="edicionArch.php?id=<?php echo $mostrar["id"] ?>" class = "table_edit_edit1"> editar</a> |
            <a href="eliminarArch.php?id=<?php echo $mostrar["id"] ?>" class = "table_edit_edit"> eliminar</a>

        </tr>
        </div>
        <?php
    }
        ?>
    
 
  
</body>

    <br>
<body>
        <a href= "exit.php" class = "botton_exit"><button>cerrar sesion</button></a>
        <script src = "DeleteConfir.js"></script>
</body>
</html>


<?php
}
else{
    header("Location: inicio.php");
}
?>