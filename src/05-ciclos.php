<?php
$usuarios = ['Juan', 'Pedro', 'Pablo', 'Luis', 'Carlos'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> Ciclos php</h1>

  <h2>For</h2>
  <ul>
    <?php for ($i = 0; $i < 10; $i++) : ?>
      <li> <?= $i ?> </li>
    <?php endfor; ?>
  </ul>

  <h2>While</h2>

  <?php while($i < 20) : ?>
    <p> <?= $i ?> </p>
    <?php $i++; ?>
  <?php endwhile; ?>
  
  <br/>
  
  <h2>Lista con Foreach</h2>
  <ul>
    <?php foreach($usuarios as $usuario) : ?>
      <li> <?= $usuario ?> </li>
    <?php endforeach; ?>
  </ul>


</body>
</html>