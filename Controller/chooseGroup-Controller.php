<?php

$group=$_POST["group"];


// var_dump($cookieinfo2 = unserialize($_COOKIE['cookie']));
// $cookieinfo2[2] = '$group';
////new add
// var_dump($cookieinfo[] = $group);

//setcookie("cookie", serialize($cookieinfo), time()+(3600) ,"/",NULL);
//setcookie('cookie', $_COOKIE['cookie'] . ';'.$group);
//var_dump($_COOKIE['cookie']);

 // var_dump($cook = $_COOKIE['emailperson']);
 //
 //  //cookie of groupe
 //  setcookie("cookie[idgroup]", $group, time()+(3600),"/");
 //
 //    var_dump($_COOKIE['cookie']);

// if(!isset($_COOKIE['idgroup'])) {
//     echo "Cookie named idgroup is not set!";
// } else {
//     echo "Cookie idgroup is set!<br>";
//     echo "Value is: " . $_COOKIE['idgroup'];
// }


  require_once("../View/chooseJourney.php");



 ?>
