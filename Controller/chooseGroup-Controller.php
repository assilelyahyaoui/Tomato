<?php
var_dump($_REQUEST);
echo "cookie id person  ";
var_dump( $_COOKIE ) ;
  echo $group=$_POST["group"];

 var_dump($cook = $_COOKIE['idperson']);
  // cookie of groupe
//   setcookie("idgroup", $group, time()+(3600),"/");
//   $_COOKIE['idgroup'] = $group;
//
//
// if(!isset($_COOKIE['idgroup'])) {
//     echo "Cookie named idgroup is not set!";
// } else {
//     echo "Cookie idgroup is set!<br>";
//     echo "Value is: " . $_COOKIE['idgroup'];
// }


  require_once("../View/chooseJourney.php");



 ?>
