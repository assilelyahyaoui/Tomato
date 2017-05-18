<?php
		$activity_name = $_POST["activity_name"];
		$activity_city =$_POST["activity_city"];
		$activity_category =$_POST["activity_category"];
		$activity_date =$_POST["activity_date"];
		$activity_start_time = $_POST["activity_start_time"];
		$activity_end_time = $_POST["activity_end_time"];
		$activity_price = $POST["activity_price"];
		$activity_address = $_POST["activity_address"];
		$activity_user_name = $_POST["activity_user_name"];

		$activity_url = $_POST["activity_url"];
		//require('../Model/addActivity_Model.php')
		echo "icdi   ";
		require_once('../Model/city-Model.php');
echo "ici1   ";
	addCity($activity_city);

		require('../View/activity.php');

	// verifier si pas vide

?>
