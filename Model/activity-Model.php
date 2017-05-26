<?php


function existsActivity($activity_name, $activity_price, $activity_url,$activity_address){
//return false if the activity dosen't exist in the database
  $UCactivityname= strtoupper($activity_name);
  require_once("../Model/PDO.php");
      $bd = connection();
      $result = $bd->query("SELECT count(*) as nb
                            From activity
                            where nameactivity='$UCactivityname'
                              and priceactivity=$activity_price
                              and websiteactivity='$activity_url'
                              and addressactivity='$activity_address';");


      $donnees = $result->fetch();

      $result->closeCursor();


  if ($donnees['nb'] == 0 ){return 0;}
  else if ($donnees['nb'] > 0 ) {return 1;}

}

function addActivity($activity_name, $activity_price, $activity_url,$activity_address){
//adds the activity to the database
require_once("../Model/PDO.php");
$UCactivityname= strtoupper($activity_name);

$exists = existsActivity($UCactivityname, $activity_price, $activity_url,$activity_address);

    if(!$exists){
    $bd = connection();

     $add = $bd->prepare( "INSERT INTO activity(nameactivity, priceactivity, websiteactivity, addressactivity)
          VALUES ('$UCactivityname','$activity_price','$activity_url','$activity_address') " );
      $add->execute();
     }//if
    return 0;
}

 function changeCondition($activityid, $newCondition)
 {// changes the condition of the activity and sets it to either pending or
   //approved or rejected
    require_once("../Model/PDO.php");

    $pending = 'Pending';
    $approved = 'Approved';
    $rejected = 'Rejected';

    $condition = ($newCondition ==$pending || $newCondition=='Approved'||
                  $newCondition=='Rejected');

        if(!$exists && $condition){
        $bd = connection();
        $add = $bd->exec( " UPDATE activity SET conditionActivity='$newCondition' WHERE idActivity=$activityid" );
      }//if
    return 0;
  }


  function getActivityID($activity_name, $activity_price, $activity_url,$activity_address){
    //gets the activity id based on its name, price. url and address

    require_once("../Model/PDO.php");
    $db = connection();

    $UCactivityname= strtoupper($activity_name);

    $exists = existsActivity($UCactivityname, $activity_price, $activity_url,$activity_address);


    if($exists){
      $result = $db->query("SELECT idActivity AS ida
                            From activity
                            where nameactivity='$UCactivityname'
                            and priceactivity=$activity_price
                            and websiteactivity='$activity_url'
                            and addressactivity='$activity_address';");


      $data = $result->fetch();
      $result->closeCursor();
      }//if
    return $data['ida'] ;
  }//getActivityID

function getActivityScore($activity_id){
// returns the activity's score based on its id inserted in the parameters
    require_once("PDO.php");
      $db = connection();

      $result = $db->query("SELECT scoreactivity as score
                            FROM activity
                            WHERE idactivity='$activity_id';");
      $data = $result->fetch();
      $result->closeCursor();
      return $data['score'];


  }//getActivityScore

  function getActivityAdress($activity_id){
  //  returns the activitys address based on its id
      require_once("PDO.php");
        $db = connection();

        $result = $db->query("SELECT adressActivity as a
                              FROM activity
                              WHERE idactivity='$activity_id';");
        $data = $result->fetch();
        $result->closeCursor();
        return $data['a'];
    }//getActivityAdress

    function getActivityPrice($activity_id){
      // returns the activity's price based on its id inserted in the parameters

        require_once("PDO.php");
          $db = connection();

          $result = $db->query("SELECT priceActivity as price
                                FROM activity
                                WHERE idactivity='$activity_id';");
          $data = $result->fetch();
          $result->closeCursor();
          return $data['price'];
      }//getActivityPrice

      function getActivityNbVotes($activity_id){
        // returns the activity's number of votes  based on its id inserted in the parameters

          require_once("PDO.php");
            $db = connection();

            $result = $db->query("SELECT nbVotes as nb
                                  FROM activity
                                  WHERE idactivity='$activity_id';");
            $data = $result->fetch();
            $result->closeCursor();
            if ($data['nb']==NULL){return 0;}
            else{return $data['nb'];}
        }//getActivitynbPeople


  function getActivityName($activity_id){
    // returns the activity's name based on its id inserted in the parameters

      require_once("PDO.php");
        $db = connection();

        $result = $db->query("SELECT nameactivity as name
                              FROM activity
                              WHERE idactivity='$activity_id';");
        $data = $result->fetch();
        $result->closeCursor();
        return $data['name'];


    }//getActivityScore

  function setActivityScore($activity_id,$newscore){
// sets the activity's (whose id is $activity_id) score to $newscore
    require_once("../Model/PDO.php");

        $bd = connection();
        $add = $bd->exec( " UPDATE activity SET scoreactivity='$newscore' WHERE idactivity='$activity_id' ;" );

    return 0;

  }

  function FindActivityCategory($activity_id){
// returns the category of the activity
  require_once("../Model/PDO.php");
        $db = connection();
       $result = $db->query("SELECT idcategory as cat
                             FROM activity,categorized
                             WHERE activity.idactivity = categorized.idactivity
                             AND activity.idactivity=$activity_id ; ");


       $data = $result->fetch();
       $result->closeCursor();

       return $data['cat'];

  }

  function deleteActivity($activity_id){
//deletes the activity who's id is $activity_id

    require_once("../Model/PDO.php");
          $db = connection();

        try{
          $delete = $db->exec( "DELETE FROM activity WHERE idactivity=$activity_id" );

        //  $req=$db->prepare("DELETE FROM activity WHERE idactivity=$activity_id");
      		//$req->execute(array($id));
      	} catch(PDOException $e){
      			echo($e->getMessage());
      			die(" Erreur lors de la suppression du lieu dans la base de données " );
        }


  }//deleteActivity



  ?>
