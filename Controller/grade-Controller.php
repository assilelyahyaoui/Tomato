  <?php


  function existsGrade($person_id, $activity_id){
    // sees if the person already voted for ths activity
    require_once("../Model/PDO.php");
        $db = connection();
        $result = $db->query("SELECT count(*) as nb
                              FROM grade
                              WHERE idperson=$person_id
                              AND idactivity=$activity_id;");

        $data = $result->fetch();

        $result->closeCursor();

    if ($data['nb'] == 0 ){return 0;}
    else if ($data['nb'] > 0 ) {return 1;}
  }//existsGrade



  function getGrade($person_id, $activity_id){
    // returns the grade a person has given to an activity
    require_once("../Model/PDO.php");

      $exists = existsGrade($person_id, $activity_id);

      if ($exists){
        $db = connection();
        $result = $db->query("SELECT grade as g
                              FROM grade
                              WHERE idperson=$person_id
                              AND idactivity=$activity_id;");

        $data = $result->fetch();

        $result->closeCursor();

        return $data['g'];
      }
  }//getgrade




/*  function deleteGrade($activityid, $score)
  {//Update the score
     require_once("../Model/PDO.php");


          $db = connection();
          $alter = $db->exec( " UPDATE activity
                                SET scoreactivity=scoreactivity+$score
                                WHERE idActivity=$activityid" );
    //    }//if
     return 0;
   }*/

   ?>
