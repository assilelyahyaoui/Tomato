<!--<?php/*
echo "pdoici   ";
function connection(){


$dsn = "pgsql:host=ec2-54-247-166-129.eu-west-1.compute.amazonaws.com;dbname=deg8ri6nlrave";
$login = "jibvzplziffbmh";
$mdp = "c6a23b7ef046d330e3d8631be5d2a78efd9f7a8fe843a61a263d6c0bd342d9d8";

// Création de la connexion
$bdd = new PDO($dsn, $login, $mdp);
echo "pdoici2   ";
return $bdd;
}
*/

?>
-->


<?php
function connection()
  {
    try
    {
      $bd = new PDO("pgsql:host=ec2-54-247-166-129.eu-west-1.compute.amazonaws.com;
      dbname=deg8ri6nlrave","user=jibvzplziffbmh",
      "password=c6a23b7ef046d330e3d8631be5d2a78efd9f7a8fe843a61a263d6c0bd342d9d8");
    }
    catch (Exception $e)
    {
      die('<br> Echec lors de la connexion la BD :'.$e->getMessage());
    }
    return ($bd);
  }
?>
