<?php


echo "<pre>";
var_dump($_FILES);
echo "</pre>";

//El nombre entre las comillas simples es el name del input en html
//Nombre de la imagen
$basename = $_FILES['image']['name'];
//Ruta temporal en el servidor
$image = $_FILES['image']['tmp_name'];
$ruta_a_subir = "./10-images/$basename";

//Mover la imagen a la carpeta que queramos
move_uploaded_file($image, $ruta_a_subir);

//TODO: Hacer una validación para que no se recargue (sobreescriba) cada vez que se recargue la página



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <img src="<?= $ruta_a_subir ?>" alt="<?= $basename ?>">
</body>
</html>