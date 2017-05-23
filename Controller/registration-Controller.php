<?php

$person_email = $_POST["person_email"];
$person_password=$_POST["person_password"]; // JS
$person_password2=$_POST["person_password2"];
$person_firstname=$_POST["person_firstname"];
$person_name=$_POST["person_name"];
$person_color=$_POST["person_color"];


require_once('../Model/person-Model.php');


$exmail =  existsEmail($person_email);

echo $person_color;

$excolor = existsColor($person_color);


if ($person_password != $person_password2){
  echo "not the same || ";

}

if (!$exmail && !$excolor) {
  echo "cest bon";
  addPerson($person_email, $person_name, $person_firstname,$person_password, $person_color);
}//if
else{
  if ($exmail) {  echo "wesh le mail existe";}
  if($excolor) {echo "another color";}
}//else

 ?>
