<?php
  session_start();

  $user = "root";
  $pass = "Funil_ronald";
  $db = "";
  $host = "localhost";

  $mysqli = new $mysqli($host,$user,$password,$db);
  if($mysqli->error)
  die("Falha ao conectar ao banco de dados:" . $mysqli->error);
?>
