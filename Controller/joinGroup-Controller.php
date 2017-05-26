<?php

$group_name=$_POST["group_name"];
$group_password=$_POST["group_password"];



if ($group_password != NULL and $group_name != NULL){

    require_once('../Model/groupOfPeople-Model.php');


     $exmail =  existsGroup($group_email ,$group_password);

     if ($exmail){}
    require_once('../Model/person-Model.php');


       $hashpass =getPassword($signIn_email);
       $idperson = getId($signIn_email);

       if ( crypt($signIn_password, $hashpass) == $hashpass ){

         require_once('../View/chooseGroup.php');

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

    //check parentheses }}//if
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

}?>
