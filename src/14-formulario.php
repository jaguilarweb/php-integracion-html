<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <title>Validaciones</title>
</head>

<body>
  <div class="container">
    <h1>Sanitizando datos</h1>

    <form action="14-server.php" method="post">
      <label for="nombre">Nombre:</label>
      <input class="mb-5 form-control" type="text" name="nombre" id="nombre">

      <label for="username">Username:</label>
      <input class="mb-5 form-control" type="text" name="username" id="username">

      <label for="email">Email:</label>
      <input class="mb-5 form-control" type="text" name="email" id="email">

      <label for="edad">Edad:</label>
      <input class="mb-5 form-control" type="text" name="edad" id="edad">

      <button class="btn btn-primary" type="submit">Mandar formulario</button>
    </form>

  </div>

</body>

</html>