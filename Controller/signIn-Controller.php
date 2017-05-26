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
