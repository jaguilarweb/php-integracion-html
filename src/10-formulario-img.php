<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Formulario IMG</title>
</head>

<body>
  <div class="container m-auto p-3">
    <form action="./10-server.php" method="post" enctype="multipart/form-data">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="nombre" class="form-control mb-2">
      <br>
      <label for="image">Imagen:</label>
      <input type="file" name="image" id="image" class="form-control mb-2">
      <br>
      <input type="submit" class="btn btn-primary" value="Enviar">
    </form>

    <div>

    </div>
  </div>
</body>

</html>