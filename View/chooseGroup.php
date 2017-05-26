<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Choose a Group</title>
    <link rel="stylesheet" type="text/css" href="/View/css/chooseGroup.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/View/css/jquery-ui.min.css">
    <script src="/View/css/jquery-ui.min.js"></script>
    <?php include_once( '../View/navBar.php'); ?>

  </head>

  <body class="dad">
    <div class="container" style="width: 100%; padding: 0;">
    <div class="row" style="margin: 60px 0; text-align: center;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p style="color: #c10b0b; font-weight: 700; font-size: 40px; font-family: 'Karla', san-serif;">
        Choose Your Group
        <span style="font-size: 30px; font-family: 'Karla', san-serif;">

          <br/></span></p>
		</div>
	</div>
	<div class="row" style="margin: 60px 0; text-align: center;">

    <?php
     require_once('../Model/tied-Model.php');
     require_once('../Model/groupOfPeople-Model.php');

       $results = getAllTiedByPerson(2);
     while($data= $results->fetch()){
    ?>


		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align: center; font-size: 10px; " >
      <form action = "choose-trip" method="post">
      <input type = "hidden" name= "group" value='<?php $data['idg'] ?>'  >
				<button type ="radio"  name= "group" value='<?php echo $data['idg'] ;?>'  >
					<a class="fig"><?php
            echo getGroupName($data['idg']);
                 ?></a>
				</button>
      </form>
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
