<?php

  function existsCategory($category_name){
  //return false if the city name dosent exist in the db. true otherwise
    $UCcategoryname= strtoupper($category_name);

    require_once("../Model/PDO.php");
        $db = connection();
        $result = $db->query("SELECT count(*) as nb
                              From category
                              where namecategory='$UCcategoryname';");


        $data = $result->fetch();
        $result->closeCursor();

    if ($data['nb'] == 0 ){return 0;}
    else if ($data['nb'] > 0 ) {return 1;}


    }//existsCategory


    function addCategory($category_name)
    #Donnée: Email (chaine de char) de l'étudiant, un mdp haché, nom(char) et prénom(char) de l'étudiant ainsi que sa promo (int = idPromo)
    #Post: ajoute l'étudiant à la base de données
    {
       require_once("../Model/PDO.php");

      $UCcategoryname = strtoupper($category_name);
      $exists = existsCategory($UCcategoryname) ;


      if (!$exists){
        $db = connection();
        $add = $db->prepare( " INSERT INTO  category(namecategory) VALUES ('$UCcategoryname') ");
        $add->execute();
      }//if
      return 0;
    }

    function removeCategoryById($category_id)
    #parameters : string name of the city
    #post : removes the city matching the city naame in the parameters from the database
    {

      require_once("../Model/PDO.php");
      $db = connection();
      $delete= $db->prepare("DELETE FROM category WHERE idcategory ='$category_id' ");

      $delete -> execute();
      return 0;


    }

    function getCategoryID($category_name){

      require_once("../Model/PDO.php");
      $db = connection();

      $UCcategoryname= strtoupper($category_name);
      $exists = existsCategory($UCcategoryname);

      if($exists){
        $result = $db->query("SELECT idcategory AS idc
                              From category
                              where namecategory='$UCcategoryname';");

        $data = $result->fetch();
        $result->closeCursor();
      }//if
    return $data['idc'] ;
  }//getCategoryID


    function getCategoryBudget($category_id){

        require_once("PDO.php");
          $db = connection();

          $result = $db->query("SELECT budgetcategory as budget
                                FROM category
                                WHERE idcategory='$category_id';");
          $data = $result->fetch();
          $result->closeCursor();

          return $data['budget'];


    }

    function setCategoryBudget($category_id,$newbudget){

      require_once("../Model/PDO.php");

          $bd = connection();
          $add = $bd->exec( " UPDATE category SET budgetcategory='$newbudget' WHERE idcategory='$category_id' ;" );

      return 0;

    }//setCategoryBudget

    function addToCategoryBudget($category_id,$addbudget){

          $currentBudget = getCategoryBudget($category_id);
          $updatedBudget = $currentBudget + $addbudget;

      require_once("../Model/PDO.php");

          $bd = connection();
          $add = $bd->exec( " UPDATE category SET budgetcategory='$updatedBudget' WHERE idcategory='$category_id' ;" );

      return 0;

    }//addToCategoryBudget

    function getAllCategoryBudget(){

        require_once("PDO.php");
          $db = connection();

          $result = $db->query("SELECT namecategory as idn, budgetcategory as budget
                                FROM category
                                ORDER BY budgetcategory ;");

            return $result;

    }//getAllCategorybudget


    function getSumCategoryBudget(){

        require_once("PDO.php");
          $db = connection();

          $result = $db->query("SELECT SUM(budgetcategory) as totalbudget
                                FROM category ;");
          $data = $result->fetch();
          $result->closeCursor();

            return $data['totalbudget'];

    }//getSumCategorybudget




 ?>
