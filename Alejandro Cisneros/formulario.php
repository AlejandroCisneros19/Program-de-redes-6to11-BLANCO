<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>



<body>
  <?php
  $ip = "192.168.137.18"; //10.120.3.105
  ?>
  <form action="http://<?php echo $ip; ?>/androidusers/consulta.php" method="GET">
    <input type="text" name="form" value="1" hidden>
    <input type="text" placeholder="nombre" name="nombre"><br><br>
    <input type="text" placeholder="email" name="email"><br><br>
    <input type="text" placeholder="password" name="contraseña"><br><br>
    <input type="text" placeholder="created_at" name="created_at"><br><br>
    <input type="text" placeholder="updated_at" name="updated_at"><br><br>
    <input type="text" placeholder="id" name="id_usuarios"> <br><br>
    <input type="submit"><br><br>
  </form>
  <hr>
  <form action="https://<?php /* echo $_SERVER['PHP_SELF']; */ echo $ip; ?>/androidusers/buscar.php" method="GET">
    <p>Buscar por ID</p>
    <input type="text" name="form" value="2" hidden>
    <input type="text" placeholder="id" name="id_usuarios">
    <input type="submit">
  </form>



  <!-- <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          if ($_GET['form'] === "1")
            require_once("consulta.php");
          else require_once("buscar.php");
          /* if($_GET['form'] === "1"){
            $email = $_GET['email'];
            $password = $_GET['password'];
            $created = $_GET['created_at'];
            $updated = $_GET['updated_at'];
            $consulta = "INSERT into usuarios values(0,null,null,1, $email , $password ,null,'4:30');";
        }
        else{
            $id = $_GET['id'];
        } */
        }
        ?> -->
</body>



</html>