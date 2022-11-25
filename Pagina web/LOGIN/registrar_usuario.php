<?php

if (isset($_COOKIE['Ingresar'])) {
    header("Location: login.php");
}

include "../BD/db.php";

function generateRandomString($length = 4) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}





if(!empty($_POST["Ingresar"]))
{
    if(empty($_POST["nombre"]) || empty($_POST["correo"]) || empty($_POST["usuario"]) || 
    empty($_POST["clave"]) || empty($_POST["rol"])){
    echo 'Todos los campos son obligatorios'; 
    }else{
            include "../BD/db.php";

            $nombre=$_POST["nombre"];
            $email=$_POST["correo"];
            $usuario=$_POST["usuario"];
            $clave=md5($_POST["clave"]);
            $rol=$_POST["rol"];
            $tag = generateRandomString();
        
        
            $query = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario='$usuario' OR correo='$email' ");
            $resultado = mysqli_fetch_array($query);    

            if($resultado >0){
                echo'EL correo o el usuario ya existen';
            }else{  
                $query_insert = mysqli_query($conexion, "INSERT INTO usuario (nombre, correo, usuario, clave, rol, TAGG) 
                                                                VALUES ('$nombre', '$email', '$usuario', '$clave', '$rol', '$tag')");                             
            if($query_insert){
                echo'Usuario creado correctamente';
                }else{
                echo'Error al crear el usuario';
                } 
            }
        }     
    
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel = "stylesheet" href= "../CSS/estilos.css">
</head>
<body>
    
    <form id="container" method = "post">

        <div class="registrar">
            <h1  class ="table__titulo">REGISTRO DE USUARIO</h1>
            <hr>

            <?php
                 include ("../BD/db.php");
            ?>

            <div class = "texto" >
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre completo">  
                <label for="correo">Correo electronico</label>
                <input type="email" name="correo" id="correo" placeholder="Correo electronico">   
                <label for="usuario">Usuario</label>
                <input type="text"  name="usuario" id="usuario" placeholder="Nombre de usuario">
                <label for="clave">Clave</label>
                <input type="password" name="clave" id="clave" placeholder="clave de acceso">
                <label for="rol">Tipo de cargo</label> 
                <select name="rol" id="rol">
                    <option value="1">Administrador</option>
                    <option value="2">cliente</option>  
                </select>       
                <input class = "crear registro" type="submit" value="crear usuario" name="Ingresar">  
            </div> 
        </div>
        
    </form>
    <a class ="boton iniciar" href= 'login.php'><button>iniciar sesion</button></a>
</body>
</html>


