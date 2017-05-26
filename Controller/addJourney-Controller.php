<?php
  $journey_name = $_POST["journey_name"];
  require_once("../Model/journey-Model.php");

  if($journey_name!=NULL){
  addJourney($journey_name,1 );

  // goes to view of add Activity
  require_once("../View/addActivity.php");
}//if
  else {
  		 header("Location: ../View/error.php?message=Please_Fill_out_all_the_Required_Fields");
  		 $message = "Please Fill Out All The Required Fields";
  		 echo "error";
  		 require_once('../View/error.php');

  }
 ?>
