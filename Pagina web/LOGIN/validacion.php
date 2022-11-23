<?php
    if (isset(($_POST["Ingresar"]))) {
        if (strlen($_POST['usuario'])>=1  && strlen($_POST['correo'])>=1) {
            $nombre=$_POST['usuario'];
            $email=$_POST['correo'];
            session_start();
            $_SESSION["usuario"] = $filas['nombre'];

            
            $conexion=mysqli_connect("localhost","root","","paginaweb");
            $consulta="SELECT * FROM usuario WHERE usuario='$nombre' and correo='$email'";
            $resultado=mysqli_query($conexion,$consulta);

            $filas=mysqli_fetch_array($resultado);

            if($filas['rol']==1){ //si es administrador
                header("location:../VentanaAdmin.php");
            }else
            if($filas['rol']==2){ //si es cliente
                header("location:../VentanaCliente.php");
            } 
        }
        else{
            echo '<script>alert("Por favor complete los campos")</script>'; 
            }
            echo '<script>alert("Error en la autentificacion")</script>';
            } 
    
?> 


