<?php
function existsCreates($person_id,$activity_id){
  // returns true if there is a link between $person_id and $activity_id
  require_once("../Model/PDO.php");
      $db = connection();
      $result = $db->query("SELECT count(*) as nb
                            FROM creates
                            WHERE idperson=$person_id
                            AND idactivity=$activity_id");

      $data = $result->fetch();

      $result->closeCursor();

  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}//existsCreates

function addCreates($person_id,$activity_id)
{// adds a link between $person_id and $activity_id in the database
   require_once("../Model/PDO.php");
   $exists = existsCreates($person_id,$activity_id);
   if (!$exists){
    $db = connection();
    $add = $db->prepare(" INSERT INTO creates(idperson, idactivity)
                          VALUES ($person_id,$activity_id) ");
    $add->execute();
    }//if
    return 0;
}//addcreates




 ?>
