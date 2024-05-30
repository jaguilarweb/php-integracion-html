<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Tipos Input</title>
</head>

<body>
  <div class="container m-auto p-3">
    <form action="./12-server.php" method="post" enctype="multipart/form-data">
      <!-- Input simple -->
      <!--       <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div> -->
      <!-- Input arreglos -->
      <!--       <div class="form-group">
        <label>Personas</label>
        <input type="text" class="form-control" name="personas[]">
        <input type="text" class="form-control" name="personas[]">
        <input type="text" class="form-control" name="personas[]">
      </div> -->
      <!-- Input arreglos asociativos -->
      <!--       <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="personas[nombre]">
        <label>Correo</label>
        <input type="email" class="form-control" name="personas[email]">
        <label>Edad</label>
        <input type="number" class="form-control" name="personas[edad]">
      </div> -->

      <!-- Input checkbox -->

      <!--       <input type="checkbox" name="list1">
      <input type="checkbox" name="list2" value="valor2">
      <input type="checkbox" name="list3" value="valor3"> -->

      <!-- Input radios -->
<!--       <input type="radio" name="pais" value="mexico" id="mexico"> México
      <input type="radio" name="pais" value="colombia" id="colombia"> Colombia
      <input type="radio" name="pais" value="peru" id="peru"> Perú -->

      <!-- Input multiples archivos -->
      <label for="galeria">Carga tus imagenes:</label>
      <input type="file" name="galeria[]" id="galeria" multiple>


      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <div>

    </div>
  </div>
</body>

</html>