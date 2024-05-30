<?php
  // Imprimir texto en PHP
  $nombre="Anita";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Imprme texto forma 1!</h1>
  <?php
    echo "<p>Imprimiendo texto forma 1</p>";
  ?>

  <h2>Imprme texto forma 2!</h2>

  <?= 
    "<p><i>Imprimiendo texto</i> y etiqueas forma 2</p>"
  ?>

  <h2><?="Hola " . $nombre; ?>!!!</h2>

</body>
</html>