<?php
$usuarios = array(
  array('nombre' => 'Juan', 'edad' => 20),
  array('nombre' => 'Pedro', 'edad' => 25),
  array('nombre' => 'Pablo', 'edad' => 30),
  array('nombre' => 'Luis', 'edad' => 35),
);

$edad = 18;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Pasar variables de php a javascript</h1>

  <p>Edad</p>
  <input type="number" id="edad" value="<?= $edad ?>">

  <script>
    let users = JSON.parse('<?= json_encode($usuarios); ?>');
    console.log(users );

    let age = <?= $edad ?>; // Pasamos la variable edad de PHP a JS
    console.log(age);
    document.getElementById('edad').value = age;


  </script>
</body>
</html>