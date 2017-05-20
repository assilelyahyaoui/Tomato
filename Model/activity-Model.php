<?php

echo "model activity";

function existsActivity($activity_name, $activity_price, $activity_url,$activity_address){
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

function addActivity($activity_name, $activity_price, $activity_url,$activity_address){

require_once("../Model/PDO.php");
$UCactivityname= strtoupper($activity_name);
echo $UCactivityname;
$exists = existsActivity($UCactivityname, $activity_price, $activity_url,$activity_address);

    if(!$exists){
    $bd = connection();

     $add = $bd->prepare( "INSERT INTO activity(nameactivity, priceactivity, websiteactivity, addressactivity)
          VALUES ('$UCactivityname','$activity_price','$activity_url','$activity_address') " );
          echo "dans boucle";

      $add->execute();
     }//if
    return 0;
}

 function changeCondition($activityid, $newCondition)
 {
    require_once("../Model/PDO.php");

    $pending = 'Pending';
    $approved = 'Approved';
    $rejected = 'Rejected';

    $condition = ($newCondition ==$pending || $newCondition=='Approved'|| $newCondition=='Rejected');

        if(!$exists && $condition){
        $bd = connection();
        $add = $bd->exec( " UPDATE activity SET conditionActivity='$newCondition' WHERE idActivity=$activityid" );
      }//if
    return 0;
  }


  function getActivityID($activity_name, $activity_price, $activity_url,$activity_address){

    require_once("../Model/PDO.php");
    $db = connection();

    $UCactivityname= strtoupper($activity_name);

    $exists = existsActivity($UCactivityname, $activity_price, $activity_url,$activity_address);


    if($exists){
      $result = $db->query("SELECT idActivity AS ida
                            From activity
                            where nameactivity='$UCactivityname'
                            and priceactivity=$activity_price
                            and websiteactivity='$activity_url'
                            and addressactivity='$activity_address';");


      $data = $result->fetch();

      $result->closeCursor();


      }//if

    return $data['ida'] ;

  }//getActivityID









  ?>
