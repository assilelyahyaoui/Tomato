<?php

/*
function addActivity($activity_name, $activity_price, $activity_url,$activity_address,$grade)
#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
#Post: ajoute l'étudiant à la base de données
{
    require_once("pdo.php");
    $bd = connexion();

  //  $ajout = $bd->prepare( "INSERT INTO activity
    //    VALUES ('".$activity_name."','".$activity_price."','"pending"','".$activity_url."','".$activity_address."','0')");

    $add = $bd->prepare( "INSERT INTO city
        VALUES ('".$activity_city."");

    $add->execute();
}
//
// exist activity
// creer fonction qui sot le plus grqnd id ui existe
// change condition
*/
function addCity($city)
#Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
#Post: adds the city to the database CHECK
{ echo "ici   ";
   require_once("../Model/PDO.php");
   echo "bcconnection   ";

    $bd = connection();
echo "afconnection   ";
  //  $ajout = $bd->prepare( "INSERT INTO activity
    //    VALUES ('".$activity_name."','".$activity_price."','"pending"','".$activity_url."','".$activity_address."','0')");

    $add = $bd->prepare( "INSERT INTO city
        VALUES ('".$activity_city."");

    $add->execute();
    return 0;
}
 ?>
