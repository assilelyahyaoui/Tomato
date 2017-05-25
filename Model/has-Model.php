<?php

function existsHas($journey_id, $activity_id){

  require_once("../Model/PDO.php");
      $db = connection();
      $result = $db->query("SELECT count(*) as nb
                            FROM has
                            WHERE idjourney=$journey_id
                            AND idactivity=$activity_id");

      $data = $result->fetch();

      $result->closeCursor();

  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}//existshas

function addHas($journey_id, $activity_id)
{
   require_once("../Model/PDO.php");
 $exists = existsHas($journey_id, $activity_id) ;
  if (!$exists){
    $db = connection();
    $add = $db->prepare( " INSERT INTO  has(idjourney, idactivity)
                          VALUES ($journey_id, $activity_id) ;");
    $add->execute();
    }//if
    return 0;
}//addHas


function getAllHasByJourney($Journey_id){

   require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT idactivity as ida
                        FROM  has
                        WHERE idJourney= $Journey_id;
                        ");
  // while ($data= $results->fetch()){
  //    echo $data['ida'];
  // }//while
  return $result;
}//getAllTiedByPerson

 ?>
