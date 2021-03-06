<?php

function existsJourney($journey_name,$group_id ){
//see if the name of journey exists
    require_once("../Model/PDO.php");
    $UCjourneyname= $journey_name;//strtoupper($journey_name);


      $db = connection();
      $result = $db->query("SELECT COUNT(*) as nb
                            FROM journey,goOn
                            WHERE journey.idjourney = goOn.idjourney
                              AND namejourney='$UCjourneyname'
                              AND goOn.idgroup= $group_id;");


      $data = $result->fetch();
      $result->closeCursor();
  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}
}//existsJourney


function addJourney($journey_name,$group_id){
// adds a journey to the database
require_once("../Model/PDO.php");
$UCjourneyname= $journey_name;//strtoupper($journey_name);
$exists = existsJourney($journey_name,$group_id);

    if(!$exists){
    $db = connection();

    $add = $db->prepare( "INSERT INTO journey(namejourney)
                          VALUES ('$UCjourneyname') " );
    $add->execute();
     }//if
    return 0;
}//AddGoOn

function getJourneyName($Journey_id){
// gets the journey's (whose id is $Journey_id ) name
  require_once("../Model/PDO.php");
  $db = connection();

  $result = $db->query("SELECT namejourney AS name
                          From journey
                          where idjourney=$Journey_id;");

  $data = $result->fetch();
  $result->closeCursor();

return $data['name'] ;
}//getGroupname


 ?>
