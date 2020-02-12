<?php
  $secret = count($_REQUEST);
  if ($secret > 0)
  {
      $nom      =$_REQUEST["nom"];
      $email    =$_REQUEST["email"];
      $message  =$_REQUEST["message"];

    $messageEnregistré=
    <<<text
     nom:    $nom
     email:  $email
     message:$message
     text;

     file_put_contents("php/model/contact.txt", $messageEnregistré, FILE_APPEND);
     echo "merci pour votre message $nom";

  }
  ?>