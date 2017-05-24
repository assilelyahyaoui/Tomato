<?php
  $journey_name = $_POST["journey_name"];
  require_once("../Model/journey-Model.php");
  addJourney($journey_name,1 );

  // goes to view of add Activity
  require_once("../View/addActivity.php");

 ?>
