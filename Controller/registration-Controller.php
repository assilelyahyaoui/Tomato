<?php

$person_email = $_POST["person_email"];
$person_password=$_POST["person_password"]; // JS
$person_password2=$_POST["person_password2"];
$person_firstname=$_POST["person_firstname"];
$person_name=$_POST["person_name"];
$person_color=$_POST["person_color"];

// see if email has a format of an email
$containsat = (strpos($person_email, '@')!==FALSE);
$containsfullstop = (strpos($person_email, '.')!==FALSE);

if ($person_email != NULL and
$person_password != NULL and
$person_password2 != NULL and
$person_firstname != NULL and
$person_name != NULL and
$person_color != NULL ){

    require_once('../Model/person-Model.php');

    $containsat = (strpos($person_email, '@')!==FALSE);
    $containsfullstop = (strpos($person_email, '.')!==FALSE);
     $exmail =  existsEmail($person_email);
     $excolor = existsColor($person_color);

     if (!$containsat || !$containsfullstop){
       header("Location: ../View/error.php?message=email_must_contain_an");
       $message = "email must contain an @";
       echo "email must contain an @ and a full stop ";
       require_once('../View/error.php');

     }

    if ($person_password != $person_password2){

    		 		header("Location: ../View/error.php?message=Passwords_don't_match");
    				$message = "Passwords don't match";
    		 		require_once('../View/error.php');

    }

    else if (!$exmail && !$excolor) {


      $saltAlg="$2a$0"; // salt algorithm
      $saltiterationCount= rand(01,9); // salt iteration count

       $saltdollar="$";
       $saltcharacters= bin2hex(random_bytes(20)); // salt characters
       $salt = $saltAlg.$saltiterationCount.$saltdollar.$saltcharacters; // concatenation
       $digest = crypt($person_password, $salt);

      addPerson($person_email, $person_name, $person_firstname,$digest, $person_color);
      require_once('../View/createGroup.php');

     }//if
    else{
      if ($exmail) {
        header("Location: ../View/error.php?message=email_exists ");
        $message = "email exists";
        require_once('../View/error.php');
      }
      if($excolor) {
        header("Location: ../View/error.php?message=color_exists");
        $message = "color exists ";
        require_once('../View/error.php');
      }
    }//else


}
else{

      header("Location: ../View/error.php?message=Please_Fill_out_all_the_Required_Fields");
      $message = "Please Fill Out All The Required Fields";
   echo "error";
        require_once('../View/error.php');

}


 ?>
