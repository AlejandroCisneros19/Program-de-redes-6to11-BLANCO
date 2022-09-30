<?php

$conn = include 'conexion.php';

if (isset($_GET['nombre'])) $nombre = $_GET['nombre'];
if (isset($_GET['email'])) $email = $_GET['email'];
if (isset($_GET['contraseña'])) $contrasenia = $_GET['contraseña'];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $sql = "insert into users (nombre, email, contraseña) values ('$nombre', '$email', '$contrasenia')";
  if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
  } else {
    echo $conn->error;
  }
}