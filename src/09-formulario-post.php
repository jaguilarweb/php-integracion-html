<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Formulario POST</title>
</head>
<body>
  <div class="container">
    <form action="./09-server.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre">
      <br>
      <label for="edad">Edad:</label>
      <input type="number" name="edad" id="edad">
      <br>
      <input type="submit" class="btn btn-primary" value="Enviar">
    </form>
  </div>
</body>
</html>