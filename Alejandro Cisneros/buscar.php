<?php
$id_camp = 'id_usuarios';
$usuarios_camp = 'usuarios';
$db = include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  require_once("conexion.php");
  $id = $_GET[$id_camp];

  $query = "SELECT * FROM $usuarios_camp WHERE $id_camp='$id'";
  $result = $db->query($query);

  if ($db->affected_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $array = $row;
    }
    echo json_encode($array);
  } else {
    echo "no se encontro nada";
  }
  $result->close();
  $db->close();
}