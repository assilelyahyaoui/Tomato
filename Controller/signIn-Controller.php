<?php


$signIn_email = $_POST["signIn-email"];
$signIn_password=$_POST["signIn-password"];

require_once('../Model/person-Model.php');


   $hashpass =getPassword($signIn_email);
   $idperson = getId($signIn_email);

   if ( crypt($signIn_password, $hashpass) == $hashpass ){

     setcookie("idperson", $idperson, time()+3600 ,"/",NULL);
     $_COOKIE['idperson'] = $idperson;

    if(!isset($_COOKIE['idperson'])) {
        echo "Cookie named idperson is not set!";
    } else {
        echo "Cookie idperson is set!<br>";
        echo "Value is: " . $_COOKIE['idperson'];
    }

     require_once('../View/chooseGroup.php');

    }



 ?>
