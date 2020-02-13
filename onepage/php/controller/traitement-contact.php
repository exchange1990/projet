<?php
  $secret = count($_REQUEST);
  if ($secret > 0)
  {
      $nom      =$_REQUEST["nom"];
      $email    =$_REQUEST["email"];
      $message  =$_REQUEST["message"];

    $messageEnregistre=
    <<<text
     nom:    $nom
     email:  $email
     message:$message

     text;

     file_put_contents("php/model/contact.txt", $messageEnregistre, FILE_APPEND);
     echo "merci pour votre message $nom";

  }
  ?>
