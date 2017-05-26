<?php


function existsPerson($person_email, $person_name, $person_firstname,$person_password, $person_color){
  // returns true if the person exists in the database false otherwise
  $UCpersonname= strtoupper($person_name);
  $UCpersonfirstname= strtoupper($person_firstname);

  require_once("../Model/PDO.php");
      $db = connection();
      $result = $db->query("SELECT count(*) as nb
                            FROM person
                            WHERE emailperson='$person_email'
                              AND nameperson='$UCpersonname'
                              AND firstnameperson='$UCpersonfirstname'
                              AND passwordperson='$person_password'
                              AND colorperson='$person_color';");


      $data = $result->fetch();

      $result->closeCursor();

  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}//existsPerson

function existsEmail($person_email){
// returns true if the email is already in the db false otherwise
  require_once("../Model/PDO.php");
      $db = connection();
      $result = $db->query("SELECT count(*) as nb
                            FROM person
                            WHERE emailperson='$person_email';");


      $data = $result->fetch();
      $result->closeCursor();

  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}//existsPerson

function existsColor($person_color){
// returns false if the colr exists in the database false otherwise
  require_once("../Model/PDO.php");
      $db = connection();
      $result = $db->query("SELECT count(*) as nb
                            FROM person
                            WHERE colorperson='".$person_color."';");


      $data = $result->fetch();
      $result->closeCursor();
  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}//existsPerson



function addPerson($person_email, $person_name, $person_firstname,$person_password, $person_color)
// adds person to the db
{
   require_once("../Model/PDO.php");
   $UCpersonname= strtoupper($person_name);
   $UCpersonfirstname= strtoupper($person_firstname);

  $exists = existsPerson($person_email, $person_name, $person_firstname,$person_password, $person_color) ;
echo $exists;
  if (!$exists){
    echo "XXX";

    $bd = connection();
    $add = $bd->prepare( " INSERT INTO  person(emailperson, nameperson, firstnameperson, passwordperson, colorperson)
                          VALUES ('$person_email', '$UCpersonname', '$UCpersonfirstname','$person_password', '$person_color') ");
    $add->execute();
  }//if
  return 0;
}
//getallgroupesassociatedwith


function getAllGroupofPerson($person_id){
  // return all the group id on which the perosn is tied to
  require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT idgroup as idg
                        FROM tied
                        WHERE idperson = $person_id;
                        ");

  // while ($data= $result->fetch()){
  //
  //   echo $data['idg'];
  //
  // };
  return $result;
}//getAllgroup

function getPassword($person_email){
// gets the password of the person whose id is in parameters
  require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT passwordperson as idp
                        FROM person
                        WHERE emailperson= '$person_email';
                        ");
  $data = $result->fetch();

  $result->closeCursor();

  return $data['idp'];
}//getPassword

function getEmail($person_id){
  // gets the email of the person whose id is in parameters

  require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT emailperson as ide
                        FROM person
                        WHERE idperson = '$person_id';
                        ");

  $data = $result->fetch();
  $result->closeCursor();
  return $data['ide'];
}//getAllgroup

function getId($person_email){
  // gets the id of the person whose id is in parameters

  require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT idperson  as idp
                        FROM person
                        WHERE emailperson = '$person_email';
                        ");

  $data = $result->fetch();
  $result->closeCursor();
  return $data['idp'];
}//getAllgroup



 ?>
