<?php

function existsGoOn($group_id, $journey_id){
// returns true if there is a link between $group_id and  $journey_id in the db
// false otherwise
  require_once("../Model/PDO.php");
      $db = connection();
      $result = $db->query("SELECT count(*) as nb
                            FROM goOn
                            WHERE idgroup=$group_id
                            AND idjourney=$journey_id;");

      $data = $result->fetch();

      $result->closeCursor();

  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}
}



function addGoOn($group_id,$journey_id)
// adds a link between journey and groupe of people
{   echo "|||";

   require_once("../Model/PDO.php");
   $exists = existsGoOn($group_id,$journey_id) ;

  if (!$exists){
    $db = connection();
    $add = $db->prepare( "INSERT INTO  goOn(idgroup, idjourney)
                          VALUES ($group_id,$journey_id); ");
    $add->execute();

    }//if
    return 0;

}//addGoOn


function getAllGoOn(){
  //gets all the links between $group_id, $journey_id in the database 
   require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT idgroup as idg, idjourney as idj
                        FROM goOn;
                        ");

  // while ($data= $result->fetch()){
  //
	//   echo $data['idg'];
	//   echo $data['idj'];
	// }//while
  return $result;
}//getAllGoOn

function getAllGoOnByGroup($group_id){
   require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT idjourney as idj
                        FROM goOn
                        WHERE idgroup = $group_id;
                        ");


//  while ($data= $result->fetch()){
    // echo 2;
	  // echo $data['idj'];
	//}//while
  return $result;
}//getAllGoOnByGroup

 ?>
