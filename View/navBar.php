<!DOCTYPE html>
<html>
  <body>
    <!--JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../View/css/jquery-ui.min.css">
    <script src="../View/css/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../View/css/navBar.css">

    <nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

      <img src="../View/Images/lPTomato.png" alt="LPTomato Icon" padding-top=10 >
			<a class="navbar-brand" href="#">Tomato</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-bell-o"></i> Calendar <span class="badge">0</span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Music</span> sayfası <span class="badge">Video</span> sayfasında etiketlendi</a></li>
						<li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Music</span> sayfasında iletiniz beğenildi</a></li>
						<li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Video</span> sayfasında iletiniz beğenildi</a></li>
						<li><a href="#"><i class="fa fa-fw fa-thumbs-o-up"></i> <span class="badge">Game</span> sayfasında iletiniz beğenildi</a></li>
					</ul>-->
				</li>
				<li class="active"><a href="../Controller/activity-navBar-Controller.php">Activities <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="../Controller/budget-Controller.php">Budget<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="../Controller/addActivity-navBar-Controller.php">Add Activity <span class="sr-only">(current)</span></a></li>




        <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Switch<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="../Controller/chooseGroup-Controller.php">Trip</a></li>
            <li class="divider"></li>
						<li><a href="../Controller/group-navbar-controller.php">Group</a></li>

					</ul>
				</li>

        <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Create New<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="../Controller/addActivity-navBar-Controller.php">Activity</a></li>
            <li class="divider"></li>
						<li><a href="../Controller/registration-Controller.php">Group</a></li>
            <li class="divider"></li>
						<li><a href="../Controller/addJouney-navbar-Controller.php">Trip</a></li>
					</ul>
				</li>

        <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Profile</a></li>
            <li class="divider"></li>
						<li><a href="#">LogOut</a></li>

					</ul>
				</li>

			</ul>

		</div>
	</div>
</nav>
  </body>
</html>
