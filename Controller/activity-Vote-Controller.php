<?php
  $grade = $_POST["Vote"];
  // add person and Activity
  if ($grade)
  require_once("../Model/grade-Model.php");
  // var_dump($Cookie);
  // insert $Cookie['emailperson']in addgrade
  addGrade(2, 3,$grade);
?>
