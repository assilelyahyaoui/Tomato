<?php
function existsCreates($person_id,$activity_id){

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

}//existsCategorized




 ?>
