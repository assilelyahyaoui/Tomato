<?php
		 // var_dump( $_COOKIE['idperson'] ) ;

		$activity_name = $_POST["activity_name"];
		$activity_city =$_POST["activity_city"];
		$activity_category =$_POST["activity_category"];
		$activity_date =$_POST["activity_date"];
		$activity_start_time = $_POST["activity_start_time"];
		$activity_end_time = $_POST["activity_end_time"];
		$activity_price = $_POST["activity_price"];
		$activity_address = $_POST["activity_address"];
		$activity_user_name = $_POST["activity_user_name"];
		$activity_url = $_POST["activity_url"];

		require_once('../Model/city-Model.php');
		require_once('../Model/activity-Model.php');
		require_once('../Model/categorized-Model.php');
		require_once('../Model/category-Model.php');
		require_once('../Model/creates-Model.php');


 if ($activity_name!= NULL and $activity_city!=NULL and	$activity_category !=NULL
 and $activity_price !=NULL
){

		addCity($activity_city);
		addActivity($activity_name, $activity_price, $activity_url,$activity_address);


		$category_id = getCategoryID($activity_category);
		$activity_id=getActivityID($activity_name,$activity_price, $activity_url,$activity_address);
		addCategorized($activity_id,$category_id );

		echo "||||";
		var_dump(existsCreates(1,1));

		$activity_Total=getActivityScore($activity_id);
		$activity_nbVotes=getActivityNbVotes($activity_id);
		if ($activity_nbVotes==0){$activity_score=0;}
		else{$activity_score= $activity_Total/$activity_nbVotes;}


		require_once('../View/activity.php');
}
	else{

		 		header("Location: ../View/error.php?message=Please_Fill_out_all_the_Required_Fields");
				$message = "Please Fill Out All The Required Fields";
		 echo "error";
		 			require_once('../View/error.php');

	}

?>
