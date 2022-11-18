<?php
    if (isset(($_POST["Ingresar"]))) {
        if (strlen($_POST["usuario"])>=1  && strlen($_POST["contraseña"])>=1) {
            $usuario=$_POST['usuario'];
            $contraseña=$_POST['contraseña'];

            $conexion=mysqli_connect("localhost","root","","rol");
            $consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
            $resultado=mysqli_query($conexion,$consulta);

            $filas=mysqli_fetch_array($resultado);


            if ($filas){
                session_start();
                $_SESSION["usuario"] = $filas["usuario"];
                $_SESSION["cargo"] = $filas["id_cargo"];

                if($filas["id_cargo"]==1){ //si es administrador
                    header("location:VentanaAdmin.php");
                }
                if($filas["id_cargo"]==2){ //si es cliente
                    header("location:VentanaCliente.php");
                }
            }

            else{
                echo '<script>alert("Este usuario no tiene cargo")</script>'; 
            }
        }
        else{
            echo '<script>alert("Por favor complete los campos")</script>';
        }
    }
?>
