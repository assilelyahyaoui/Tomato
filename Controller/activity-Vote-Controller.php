<?php
  $grade = $_POST["Vote"];
  // add person and Activity
  if ($grade)
  require_once("../Model/grade-Model.php");
  addGrade(2, 3,$grade);
?>
