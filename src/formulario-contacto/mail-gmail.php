<?php

//require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/src/PHPMailer.php';
//require 'vendor/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/src/Exception.php';

function sendMail($subject, $body, $email, $name, $html){

  $mail = new PHPMailer(true);

  try {
      //Server settings
      $mail->isSMTP();                                            // Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
      $mail->Port       = 465;                                   // TCP port to connect to
      $mail->Username   = 'user@gmail.com';                     // SMTP username
      $mail->Password   = 'pass-creada-gmail';                               // SMTP password
      //Añadiendo destinatarios
      $mail->setFrom('contact@yo.com','Mi empresa');
      $mail->addAddress($email, $name);     // Add a recipient

      // Content
      $mail->isHTML($html);                                  // Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body    = $body;

    //enviar el correo
      $mail->send();
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>