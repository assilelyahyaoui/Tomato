<?php


      $group_name = $_POST["group_name"];
      $group_password=$_POST["group_password"];
      $group_password2=$_POST["group_password2"];

    if ($group_name != NULL and $groupe_password!= NULL and $groupe_password2!=NULL)

    {  require_once('../Model/groupOfPeople-Model.php');



       echo  $exgroup =  existsGroup($group_name, $group_password);


      if ($group_password != $group_password2){
        echo "not the same || ";

      }

      else if (!$exgroup) {
        echo "cest bon";

        $saltAlg="$2a$0"; // salt algorithm
        $saltiterationCount= rand(01,10); // salt iteration count

        echo $saltiterationCount;

         $saltdollar="$";
         $saltcharacters= bin2hex(random_bytes(20)); // salt characters
         $salt = $saltAlg.$saltiterationCount.$saltdollar.$saltcharacters; // concatenation
         $digest = crypt($group_password, $salt);
         echo "digest".$digest;
        addGroup($group_name, $digest);

        require_once('../View/addJourney.php');

      }
    }
    else{

          header("Location: ../View/error.php?message=Please_Fill_out_all_the_Required_Fields");
          $message = "Please Fill Out All The Required Fields";
       echo "error";
            require_once('../View/error.php');

    }

 ?>
