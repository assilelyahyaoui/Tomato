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

function getGroupNbPeople($group_name){

  require_once("../Model/PDO.php");
  $db = connection();

  $UCgroupname= strtoupper($group_name);
  $exists = existsGroup($UCgroupname);

  if($exists){
    $result = $db->query("SELECT nbpeople AS nb
                          From groupofpeople
                          where namegroup='$UCgroupname';");

    $data = $result->fetch();
    $result->closeCursor();
  }//if
return $data['nb'] ;
}//getGroupNbPeople

function getGroupID($group_name){

  require_once("../Model/PDO.php");
  $db = connection();

  $UCgroupname= strtoupper($group_name);
  $exists = existsGroup($UCgroupname);

  if($exists){
    $result = $db->query("SELECT idgroup AS id
                          From groupofpeople
                          where namegroup='$UCgroupname';");

    $data = $result->fetch();
    $result->closeCursor();
  }//if
return $data['id'] ;
}//getGroupID


function getGroupName($group_id){

  require_once("../Model/PDO.php");
  $db = connection();

  $result = $db->query("SELECT namegroup AS name
                          From groupofpeople
                          where idgroup=$group_id;");

  $data = $result->fetch();
  $result->closeCursor();

return $data['name'] ;
}//getGroupname



  function getAllGroupMembers($group_id){

    require_once("../Model/PDO.php");
    $db = connection();
    $result = $db->query("SELECT idperson as idp
                          FROM tied
                          WHERE idgroup = $group_id;
                          ");

    // while ($data= $result->fetch()){
    //
    //   echo $data['idp'];
    //
    // };//while
    return $result;
  }//getAllgroupMemebers


 ?>
