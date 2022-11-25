<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENTE</title>
    <link rel = "stylesheet" href= 'CSS/estilos.css'>
</head>

<body>

    <form action='JERARQUIAS/subirIMG.php' class ="subirARCH"method="POST" enctype="multipart/form-data">
        <label for="file">Seleccione imagen</label><br>
        <input type="file" id="file"name="file"><br>
        
        <label for="descrip">Descripcion de la imagen</label><br>
        <input type="text" id="desc" name="desc"><br>

        <input type="submit" value="subir" name="subir">
        
    </form>
    <br>
</body>



<body>
<a href= 'LOGIN/exit.php' class = "boton"><button>cerrar sesion</button></a>
</body>
</html>