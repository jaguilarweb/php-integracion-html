<?php
// Imprimir texto en PHP
$nombre = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

<h2>Mala práctica</h2>
  <!-- Esta es mala práctica -->
  <?php if ($nombre) {

    echo "<p>Tiene nombre</p>";
  } else {
    echo "<p>No tiene nombre</p>";
  }

  ?>

<h2>Aceptable</h2>
  <!-- Esta es aceptable-->
  <!-- Ya que el html queda fuera del php -->
  <?php if ($nombre) { ?>

    <p>Tiene nombre</p>

  <?php } else { ?>

    <p>No tiene nombre</p>

  <?php } ?>


  <h2>Buenas prácticas</h2>
  <!-- Buenas ptácticas-->
  <?php if ($nombre) : ?>

    <p>Tiene nombre</p>

  <?php else : ?>

    <p>No tiene nombre</p>

  <?php endif; ?>



</body>

</html>