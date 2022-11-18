<?php 
session_start();
session_destroy();
include("validacion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel = "stylesheet" href= "estilos.css">
</head>


<body>
    <div class = "principal">
        <h1 class="formulario"> INICIE SESION </h1>

         <form method="post">
         <div class = "campos">
         <p>Usuario: <input type="text" placeholder="ingrese el usuario" name="usuario"></p>
         </div>   
         <div class = "campos">
         <p>Contraseña: <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
         </div>

         <input type="submit" value="Ingresar" name="Ingresar">
        </form>
    </div>

</body>
</html>