<?php


function existsPerson($activity_name, $activity_price, $activity_url,$activity_address){
//return false if the city name dosent exist in the db. true otherwise
  $UCactivityname= strtoupper($activity_name);
  require_once("../Model/PDO.php");
      $bd = connection();
      $result = $bd->query("SELECT count(*) as nb
                            From activity
                            where nameactivity='$UCactivityname'
                              and priceactivity=$activity_price
                              and websiteactivity='$activity_url'
                              and addressactivity='$activity_address';");


      $donnees = $result->fetch();

      $result->closeCursor();


  if ($donnees['nb'] == 0 ){return 0;}
  else if ($donnees['nb'] > 0 ) {return 1;}

}






 ?>
