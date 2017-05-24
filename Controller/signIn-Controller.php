<?php

$signIn_email = $_POST["signIn-email"];
$signIn_password=$_POST["signIn-password"];

require_once('../Model/person-Model.php');

   $samePass=0;
   $hashpass =getPassword($signIn_email);
   if ( crypt($signIn_password, $hashpass) == $hashpass ){
     
     $samePass=1;
     // aller vers la page d'acceuil
    };



 ?>
