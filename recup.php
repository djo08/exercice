<?php

function traitement (){
  if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
  }
  if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    }
    if (isset($_POST['prenom'])) {
      $prenom = $_POST ['prenom'];
    }

    if (isset($_POST['e-mail'])) {
      $adresse = $_POST['e-mail'];
    }
}
$to      = 'djoandco@gmail.com';
$subject = 'test';
$message .= $email.'<br/>';
$message .= $prenom.'<br/>';
$message .= $nom.'<br/>';
$message .= $genre.'<br/>';
$headers = "Content-Type:text/html;charset=UTF-8";
mail($to, $subject, $message, $headers );
traitement();
?>

  
