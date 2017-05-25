<?php


$signIn_email = $_POST["signIn-email"];
$signIn_password=$_POST["signIn-password"];

// $row = array(
//
//     'signIn_email' => 3,
//
// );
// $cookieinfo=[];
// $cookieinfo[1] = '$signIn_email';
// $cookieinfo[2] = '$signIn_password';
$cookieinfo = array('$signIn_password');

//setcookie("cookie", serialize($cookieinfo), time()+(3600) ,"/",NULL);

//setcookie('user_name',  $row['UserName'], time()+ (60*15),"/");

setcookie('emailperson', '$signIn_email', time()+(3600) ,"/",NULL);
var_dump($_COOKIE['cookie']);


require_once('../Model/person-Model.php');


   $hashpass =getPassword($signIn_email);
   $idperson = getId($signIn_email);

   if ( crypt($signIn_password, $hashpass) == $hashpass ){

     require_once('../View/chooseGroup.php');

    }



 ?>
