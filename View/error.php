<!DOCTYPE html>
<html>
	<head>
		<title>Error</title>
		<!-- <link rel="stylesheet" href="View/login.css">  -->
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
	<body>

		<h1 class="title">Error</h1>

		<p>  <?php

    echo $msg =$_GET["message"];

     ?>
   </p>
		<br>

		<div style="text-align:center">
		<a  class="back Button" type="button"  href="javascript:history.back()">Go Back</a>
		</div>

	</body>
</html>
