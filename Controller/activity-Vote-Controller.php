<?php
  $grade = $_POST["Vote"];
  // add person and Activity
  echo $grade;
  require_once("../Model/grade-Model.php");
  addGrade(2, 3,$grade);
?>
