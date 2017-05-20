<?php

function existsGrade($activity_id,$person_id){
//return false if the city name dosent exist in the db. true otherwise
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
#parameters : string name of the city
#post : removes the city matching the city naame in the parameters from the database
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

  require_once("../Model/PDO.php");

      $db = connection();
      $set = $db->exec( " UPDATE grade
                          SET grade=$newgrade
                          WHERE idactivity=$activity_id
                          AND idPerson=$person_id  ;" );

  return 0;

}





 ?>
