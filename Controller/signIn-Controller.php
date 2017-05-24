<?php

$signIn_email = $_POST["signIn-email"];
$signIn_password=$_POST["signIn-password"];

require_once('../Model/person-Model.php');
var_dump( $signIn_email);
var_dump ($signIn_password) ;

$lala=getPassword('$signIn_email');
echo "fjskno;jrf;sfh;z";
var_dump($lala);


//    $truth=0;
//    $hashpass =
//    if ( crypt($person_password, $digest) == $digest ){ $truth=1;};
// echo "|||||| reponse : ";
// echo $truth;

 ?>
