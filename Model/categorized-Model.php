<?php

function existsCategorized($activity_id, $category_id){

  require_once("../Model/PDO.php");
      $db = connection();
      $result = $db->query("SELECT count(*) as nb
                            FROM categorized
                            WHERE idcategory=$category_id
                            AND idactivity=$activity_id");

      $data = $result->fetch();

      $result->closeCursor();

  if ($data['nb'] == 0 ){return 0;}
  else if ($data['nb'] > 0 ) {return 1;}

}//existsCategorized

function addCategorized($activity_id, $category_id)
{
   require_once("../Model/PDO.php");
   echo "||||";
 $exists = existsCategorized($activity_id, $category_id);
  if (!$exists){
    $db = connection();
    $add = $db->prepare(" INSERT INTO categorized(idactivity, idcategory)
                          VALUES ($activity_id, $category_id) ");
    $add->execute();
    }//if
    return 0;
}//addCategorized



 ?>
