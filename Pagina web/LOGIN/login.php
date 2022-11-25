<?php 
session_start();
session_destroy();
include('validacion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logeo</title>
    <link rel = "stylesheet" href= "../CSS/estilos.css">
</head>


<body>
    <div class = "principal">
        <h1> INICIE SESION </h1>
        <hr>
         <form action ='validacion.php' method="post">
         <div class = "campos">
         <p>Usuario: <input type="text" placeholder="ingrese el usuario" name='usuario'></p>
         </div>   
         <div class = "campos">
         <p>Contraseña: <input type="password" placeholder="ingrese su contraseña" name='contraseña'></p>
         <div class = "campos">
         <p>Email: <input type="text" placeholder="ingrese su correo" name='correo'></p>
         </div>

            <input type="submit" value="Ingresar" name="Ingresar">
            <br>
            <br>
            <br>
            <a href='registrar_usuario.php'>No tienes una cuenta? Registrate</a>
        </form>
    </div>

</body>
</html>