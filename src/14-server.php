<?php

/* echo "<pre>";
var_dump($_POST);
echo "</pre>"; */

$nombre = $_POST['nombre'];
$username = $_POST['username'];
$email = $_POST['email'];
$edad = $_POST['edad'];

// Sanitizar datos 

//Forma 1
//$htmlentities = htmlentities($nombre); //Convierte caracteres especiales a entidades HTML
$htmlentities = htmlentities($username);

//Forma 2
//Escapar caracteres
$addslashes = addslashes($username);

//Forma 3
//Expresiones regulares
//Solo palabras
$onlywords = preg_replace("/\d/", "", $username);
//Solo numeros
$onlynumbers = preg_replace("/\D/", "", $username);

//Forma 4
//Filtrar datos
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$edad = filter_var($_POST['edad'], FILTER_SANITIZE_NUMBER_INT);
//$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dtos Usuario</title>
</head>
<body>
  <p>Nombre</p>
  <?= $nombre?>

  <p>Username</p>
  <?= $addslashes ?>

  <p>Username solo palabras</p>
  <?= $onlywords ?>

  <p>Email</p>
  <?= $email ?>

  <p>Edad</p>
  <?= $edad ?>


</body>
</html>