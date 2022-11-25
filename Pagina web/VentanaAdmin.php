<?php
    include('BD/db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA</title>
    <link rel = "stylesheet" href= "CSS/estilos.css">
</head>



    <body>

        <div class = "table__titulo"> IMAGENES SUBIDAS A LA BASE DE DATOS </div>
        <hr>
            <table>
                <tr>
                    <th>id</th>
                    <th >titulo</th>
                    <th >descrip</th> 
                    <th >operacion</th> 
                 </tr>
            
                <?php
                    $sql = "SELECT*FROM archivos";
                    $resultado = mysqli_query($conexion, $sql);

                    while($mostrar= mysqli_fetch_array($resultado)){
                ?>  
            
                <tr>
                    <th><?php echo $mostrar['id'] ?></th> 
                    <th><?php echo $mostrar['titulo'] ?></th> 
                    <th><?php echo $mostrar['descrip'] ?></th> 

                    <th class = "table__item">
                        <a href='JERARQUIAS/eliminarArch.php?id=<?php echo $mostrar["id"] ?>' class = "table_delete"> eliminar</a> </th>
                </tr>
                        
                <?php
                    }
                ?>
            </table>
            <script src='JERARQUIAS/eliminarConfir.js'></script>
    </body>

    <body>
        <a href= 'LOGIN/exit.php' class = "boton"><button>cerrar sesion</button></a>
    </body>

    <br>
    <br>
    <br>

    <body>

            <div class = "table__titulo"> USUARIOS REGISTRADOS EN LA WEB </div>
            <hr>
        <table>
            <tr>
            <th>idusuario</th>
            <th >usuario</th>
            <th >TAGG</th>
            </tr>
    
            <?php
            $sql = "SELECT*FROM usuario";
            $resultado = mysqli_query($conexion, $sql);

            while($mostrar= mysqli_fetch_array($resultado)){
            ?>  
    
            <tr>
            <th><?php echo $mostrar['idusuario'] ?></th> 
            <th><?php echo $mostrar['usuario'] ?></th> 
            <th><?php echo $mostrar['TAGG'] ?></th> 
            </tr>
                
            <?php
                }
            ?>
        </table>
    </body>


</html>
