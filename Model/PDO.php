
//mahe

<?php
function connection()
  { echo "connection in pdo.php |||  ";

    try
    {
      $bd = new PDO('pgsql:host=ec2-46-137-97-169.eu-west-1.compute.amazonaws.com;port=5432;dbname=deevnl4b13gbb;user=kqsiwdgqnmwmdu;password=044fc4a945590ac0155e11df5afd188b3e42ff0623f57eb7db88da187e43319d');
      //echo $bd;
    }
    catch (Exception $e)
    {
      die('<br> Echec lors de la connexion la BD :'.$e->getMessage());
    }
    return ($bd);
  }
?>
