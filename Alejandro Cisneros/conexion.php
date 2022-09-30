<?php
$db = new mysqli("localhost", "root", "", "androidusers");

if ($db->connect_error) die("ERROR");
else {
  echo "Conexión creada";
}
return $db;