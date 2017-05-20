<?php

function existsGroup( $group_name){
//return false if the city name dosent exist in the db. true otherwise

  $UCgroupname= strtoupper($group_name);
  require_once("../Model/PDO.php");
      $db = connection();
      $result = $db->query("SELECT count(*) as nb
                            FROM groupofpeople
                            WHERE namegroup='$UCgroupname'
                            ");



      $data = $result->fetch();

      $result->closeCursor();


  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}//existsGroup

function addGroup($group_name,$group_password)
{
   require_once("../Model/PDO.php");

  $UCgroupname = strtoupper($group_name);
  $exists = existsGroup($UCgroupname) ;


  if (!$exists){
    $db = connection();
    $add = $db->prepare( " INSERT INTO  groupofpeople(namegroup, passwordgroup)VALUES ('$UCgroupname','$group_password') ");
    $add->execute();

  return 1;
    }//if
  else{
    return -1;
  }
}





 ?>
