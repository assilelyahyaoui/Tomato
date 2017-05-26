<?php

function existsTied($group_id, $person_id){
// returns true if there is a link between $group_id, $person_id
  require_once("../Model/PDO.php");
      $db = connection();
      $result = $db->query("SELECT count(*) as nb
                            FROM tied
                            WHERE idgroup=$group_id
                            AND idperson=$person_id");

      $data = $result->fetch();

      $result->closeCursor();

  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}

function addTied($group_id,$person_id)
{// adds a link between $group_id, $person_id in the db
   require_once("../Model/PDO.php");
 $exists = existsTied($group_id,$person_id) ;


  if (!$exists){
    $db = connection();
    $add = $db->prepare( " INSERT INTO  tied(idgroup, idperson)
                          VALUES ($group_id,$person_id) ");
    $add->execute();

    }//if
    return 0;


}//addTied

function getAllTied(){
// gets all the links between all groups ans persons
   require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT idtied as idt, idperson as idp, idgroup as idg
                        FROM tied;
                        ");
  // while ($data= $result->fetch()){
  //   echo $data['idt'];
  //   echo $data['idg'];
  //   echo $data ['idp'];
  // }//while
  return $result;
  }//getAllTies

  function getAllTiedByPerson($Person_id){
// returns the ties and groupnames associated with person_id 
     require_once("../Model/PDO.php");
    $db = connection();
    $result = $db->query("SELECT idtied as idt, idgroup as idg
                          FROM tied
                          WHERE idperson= $Person_id;
                          ");
    // while ($data= $result->fetch()){
    //   echo $data['idt'];
    //   echo $data['idg'];
    // }//while
    return $result;
  }//getAllTiedByPerson


 ?>
