<?php

function existsCity($cityname){
//return false if the city name dosent exist in the db. true otherwise
  $UCcityname= strtoupper($cityname);
  require_once("../Model/PDO.php");

      $bd = connection();
      $result = $bd->query("SELECT COUNT(*) as nb FROM city WHERE namecity='$UCcityname'");
      $donnees = $result->fetch();
      $result->closeCursor();

  if ($donnees['nb'] == 0 ){ return false;}
  else if ($donnees['nb'] > 0 ) {return true;}

}

function addCity($city_name)
#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
#Post: ajoute l'étudiant à la base de données
{
   require_once("../Model/PDO.php");
   //require_once("./Model/city-Model.php");

  $uccityname = strtoupper($city_name);
  $exists = existsCity($uccityname) ;


//  echo existsCity($uccityname);
  if (!$exists){
    $bd = connection();
    $add = $bd->prepare( " INSERT INTO  city(namecity) VALUES ('$uccityname') ");
    $add->execute();
  }//if
  return 0;
}

function removeCityByName($city_name)
#parameters : string name of the city
#post : removes the city matching the city naame in the parameters from the database
{
  $uccityname = strtoupper($city_name);
  require_once("../Model/PDO.php");
  $db = connection();
  $delete= $db->prepare("DELETE FROM city WHERE namecity ='$uccityname' ");

  $delete -> execute();
  return 0;


}
/*

function getAllCitiesID($city)
##hastobechecked
#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
#Post: adds the city to the database CHECK
{
   require_once("../Model/PDO.php");


    $bd = connection();
    $result = $bd->query("SELECT *  FROM city ");
    $donnees = $result->fetch();
    $result->closeCursor();


    return $donnees['idcity'];


}

*/

//change state
// check if city exists*/  ?>
