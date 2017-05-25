<?php

$person_email = $_POST["person_email"];
$person_password=$_POST["person_password"]; // JS
$person_password2=$_POST["person_password2"];
$person_firstname=$_POST["person_firstname"];
$person_name=$_POST["person_name"];
$person_color=$_POST["person_color"];

require_once('../Model/person-Model.php');

 var_dump( $person_password);

 $exmail =  existsEmail($person_email);
 $excolor = existsColor($person_color);

if ($person_password != $person_password2){
  echo "not the same || ";

}

else if (!$exmail && !$excolor) {
  echo "cest bon";

  $saltAlg="$2a$0"; // salt algorithm
  $saltiterationCount= rand(01,9); // salt iteration count

   $saltdollar="$";
   $saltcharacters= bin2hex(random_bytes(20)); // salt characters
   $salt = $saltAlg.$saltiterationCount.$saltdollar.$saltcharacters; // concatenation
   $digest = crypt($person_password, $salt);

  addPerson($person_email, $person_name, $person_firstname,$digest, $person_color);


 }//if
else{
  if ($exmail) {echo "le mail existe";}
  if($excolor) {echo "another color";}
}//else

require_once('../View/createGroup.php');


 ?>
