

//pdo

<?php
function connection()
  {

    try
    {
      $bd = new PDO('pgsql:host=ec2-54-247-166-129.eu-west-1.compute.amazonaws.com;port=5432;dbname=deg8ri6nlrave;user=jibvzplziffbmh;password=c6a23b7ef046d330e3d8631be5d2a78efd9f7a8fe843a61a263d6c0bd342d9d8');

    }
    catch (Exception $e)
    {
      die('<br> Echec lors de la connexion la BD :'.$e->getMessage());
    }
    return ($bd);
  }
?>
//endPDO
