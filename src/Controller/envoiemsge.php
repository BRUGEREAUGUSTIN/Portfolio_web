<?php
if(isset($_POST)){
    $nom=$_POST['name']?: 'unknow';
    $email=$_POST['email']?: 'unknow';
    $numTel=$_POST['phoneNumber']?: 'unknow';
    $obj=$_POST['object']?: 'none';
    $mess= $_POST['message'] ?: 'none';
    $message = "message de ".$nom."\r\n mail : ".$email."\r\n tel : ".$numTel."\r\n message : ".$mess;

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
    $message = wordwrap($message, 70, "\r\n");

// Envoi du mail
    mail('brugereaugustin@gmail.com', $obj, $message);
    header("location: ../View/contact.php?succes=1");
}
