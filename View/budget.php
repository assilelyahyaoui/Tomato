<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Budget</title>
    <link rel="stylesheet" type="text/css" href="./budget.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/jquery-ui.min.css">
    <script src="./css/jquery-ui.min.js"></script>
  </head>

  <body class="dad">
    <div class="container" style="width: 100%; padding: 0;">
    <div class="row" style="margin: 60px 0; text-align: center;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p style="color: #c10b0b; font-weight: 700; font-size: 36px; font-family: 'Karla', san-serif;">Budget per Category<span style="font-size: 50px; font-family: 'Karla', san-serif;">
          <br/><?php require_once('../Model/category-Model.php');
                echo "Total:".getSumCategoryBudget()."$" ?></span></p>
		</div>
	</div>
	<div class="row" style="margin: 60px 0; text-align: center;">

    <?php

    $resulta = getAllCategoryBudget();
    $i=0;

    while($data= $resulta->fetch())
    {$i++;
    ?>


		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align: center;">
				<a class="fig">
					<?php echo $data['budget']; echo "$";
                 ?>
					<span style="font-size: 14px; font-family: 'Karla', san-serif;"><br/><?php echo $data['idn']; ?></span>
				</a>
		</div>
    <?php
                }
        $resulta->closeCursor();
     ?>

	</div>
</div>
<!-- ADD JS DE  -->
  </body>
</html>
