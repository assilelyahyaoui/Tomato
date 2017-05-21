<?php


function existsPerson($person_email, $person_name, $person_firstname,$person_password, $person_color){
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

      echo "dddddd";

  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}//existsPerson



function addPerson($person_email, $person_name, $person_firstname,$person_password, $person_color)
#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
#Post: ajoute l'étudiant à la base de données
{
   require_once("../Model/PDO.php");
   $UCpersonname= strtoupper($person_name);
   $UCpersonfirstname= strtoupper($person_firstname);

  $exists = existsPerson($person_email, $person_name, $person_firstname,$person_password, $person_color) ;


  if (!$exists){
    $bd = connection();
    $add = $bd->prepare( " INSERT INTO  person(emailperson, nameperson, firstnameperson, passwordperson, colorperson)
                          VALUES ('$person_email', '$UCpersonname', '$UCpersonfirstname','$person_password', '$person_color') ");
    $add->execute();
  }//if
  return 0;
}
//getallgroupesassociatedwith


function getAllGroupofPerson($person_id){

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

function getPassword($person_id){

  require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT passwordperson as idp
                        FROM person
                        WHERE idperson = $person_id;
                        ");

  $data = $result->fetch();
  $result->closeCursor();
  return $data['idp'];
}//getAllgroup

function getEmail($person_id){

  require_once("../Model/PDO.php");
  $db = connection();
  $result = $db->query("SELECT emailperson as ide
                        FROM person
                        WHERE idperson = $person_id;
                        ");

  $data = $result->fetch();
  $result->closeCursor();
  return $data['ide'];
}//getAllgroup



 ?>
