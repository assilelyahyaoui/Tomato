<?php

$activity_id=$_POST["activity"];

// cookie of groupe
require_once("../Model/activity-Model.php");
require_once("../Model/category-Model.php");

$activity_name = getActivityName($activity_id);
//$activity_city =$_POST["activity_city"];
$activity_category =getCategoryName(FindActivityCategory($activity_id));
$activity_price = getActivityPrice($activity_id);
//var_dump($activity_address = getActivityAdress($activity_id));

$activity_Total=getActivityScore($activity_id);
$activity_nbVotes=getActivityNbVotes($activity_id);
if ($activity_nbVotes==0){$activity_score=0;}
else{$activity_score= $activity_Total/$activity_nbVotes;}
require_once("../View/activity.php");



 ?>
