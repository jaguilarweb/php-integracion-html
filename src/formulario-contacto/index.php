<?php

//Incluir el archivo de la función de envío de correo
require "mail.php";

//validar que los campos no estén vacíos
function validate($name, $email, $subject, $message, $form) {
  empty($name) && empty($email) && empty($subject) && empty($message);
}

$status = "";

if(isset($_POST['form'])) {

  if(validate(...$_POST)) {
    //Enviar el correo
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $body = "Nombre: $name <br> Correo: $email <br> Mensaje: $message";

    // Enviar el correo
    //La función de mail() de php ya no es tan recomendable
    //La alternativa es usar una librería de terceros como PHPMailer o Swiftmailer.
    //https://packagist.org/packages/phpmailer/phpmailer

    sendMail($subject, $body, $email, $name, true);
    $status = "success";
  }else{
    $status = "error";
  }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formulario de contacto</title>
</head>
<body>


<?php if($status === "error"): ?>
  <div class="alert danger">
    <span class="close-btn">x</span>
    <span class="msg">Hubo un problema</span>
  </div>
<?php endif; ?>

<?php if($status === "success"): ?>
  <div class="alert success">
    <span class="close-btn">x</span>
    <span class="msg">¡Mensaje enviado!</span>
  </div>
<?php endif; ?>


  <form action="./" method="POST">
    <h1>¡Contáctanos!</h1>
    <div class="input-group">
      <label for="name">Nombre:</label>
      <input type="text" id="name" name="name" >
    </div>
    <div class="input-group">
      <label for="email">Correo:</label>
      <input type="email" id="email" name="email" >
    </div>
    <div class="input-group">
      <label for="subject">Asunto:</label>
      <input id="subject" name="subject" ></input>
    </div>
    <div class="input-group">
      <label for="message">Mensaje:</label>
      <textarea id="message" name="message" ></textarea>
    </div>
    <div class="button-container">
      <button name="form" type="submit">Enviar</button>
    </div>

    <div class="contact-info">
      <div class="info">
        
        <span><i class="fas fa-map-marker-alt"></i>13 San Hernan, Orleans</span>
      </div>

    <div class="info">
      <span class="phone"><i class="fas fa-phone"></i>+33 6 12 34 56 78</span>
    </div>
    </div>
  </form>

<script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
</body>
</html>