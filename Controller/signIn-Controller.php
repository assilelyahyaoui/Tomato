<?php


$signIn_email = $_POST["signIn-email"];
$signIn_password=$_POST["signIn-password"];


if ($signIn_email!= NULL and $signIn_password!=NULL){


  $containsat = (strpos($signIn_email, '@')!==FALSE);
  $containsfullstop = (strpos($signIn_email, '.')!==FALSE);

  if (!$containsat || !$containsfullstop){
    header("Location: View/error.php?message=email_must_contain_an_@");
    $message = "email must contain an @";
    echo "email must contain an @ and a full stop ";
    require_once('View/error.php');

  }
  else {

$cookieinfo = array('$signIn_password');


setcookie('emailperson', '$signIn_email', time()+(3600) ,"/",NULL);

require_once('../Model/person-Model.php');


   $hashpass =getPassword($signIn_email);
   $idperson = getId($signIn_email);

   if ( crypt($signIn_password, $hashpass) == $hashpass ){

     require_once('../View/chooseGroup.php');

    }
    else{

          header("Location: ../View/error.php?message=Password_and_mail_dont_match");
            echo $message = "Password and email don't match";

            require_once('../View/error.php');

    }
  }
}
else{

      header("Location: ../View/error.php?message=Please_Fill_out_all_the_Required_Fields");
      $message = "Please Fill Out All The Required Fields";
   echo "error";
        require_once('../View/error.php');

}




 ?>
