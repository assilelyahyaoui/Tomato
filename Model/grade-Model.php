<?php

function existsGrade($activity_id,$person_id){
  // returns true if there is a link between $activity_id and $person_id in the db
  // false otherwise
    require_once("../Model/PDO.php");

      $db = connection();
      $result = $db->query("SELECT COUNT(*) as nb
                            FROM grade
                            WHERE idperson=$person_id
                            AND idActivity=$activity_id;");
      $data = $result->fetch();
      $result->closeCursor();

  if ($data['nb'] == 0 ){ return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}

function addGrade($activity_id, $person_id,$grade){
// creates a link between $activity_id and $person_id in the db
require_once("../Model/PDO.php");

$exists = existsGrade($activity_id, $person_id);

    if($exists){
      setGrade($activity_id, $person_id,$grade)  ;
     }
     else {
       $db = connection();
       $add = $db->prepare( "INSERT INTO grade(idActivity,idPerson,grade)
                           VALUES ($activity_id, $person_id,$grade) " );
       $add->execute();
     }//else

    return 0;
}//addGrade

function removeGrade($activity_id, $person_id)
// removes the grade given by the person to the activity passed in the parameters
{
  require_once("../Model/PDO.php");
  $db = connection();
  $delete= $db->prepare("DELETE FROM grade
                        WHERE idActivity =$activity_id
                        AND idperson=$person_id");

  $delete -> execute();
  return 0;


}

function getGrade($activity_id, $person_id){
// returns the grade given by $person_id to $activity_id
  require_once("../Model/PDO.php");
  $db = connection();

  $exists = existsGrade($activity_id, $person_id);


  if($exists){
    $result = $db->query("SELECT grade AS g
                          From grade
                          WHERE idactivity=$activity_id
                          AND idPerson=$person_id ;");


    $data = $result->fetch();
    $result->closeCursor();
    }//if
  return $data['g'] ;
}


function setGrade($activity_id, $person_id ,$newgrade){
    // sets the grade $newgrade of the person $person_id to the activity $activity_id 
  require_once("../Model/PDO.php");

      $db = connection();
      $set = $db->exec( " UPDATE grade
                          SET grade=$newgrade
                          WHERE idactivity=$activity_id
                          AND idPerson=$person_id  ;" );

  return 0;

}

function deleteGrade($activity_id, $person_id ){


}
 ?>
