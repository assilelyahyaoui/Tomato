<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add a Journey</title>
    <!-- jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../View/css/jquery-ui.min.css">
    <script src="../View/css/jquery-ui.min.js"></script>

    <link href="../View/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../View/css/addActivity.css">

  </head>
  <body>

    <body>
      <h1>Add a Journey</h1>

      <form action = "../Controller/addJourney-controller.php" method="post">
        <div class="form-group">
          <label for="activity_user_name">Select A Name for Your Journey </label>
          <input type="text" class="form-control" id="journey_name"  name="journey_name" placeholder="Enter A Name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <!-- CREATING YOUR JOURNEY HERE WILL SHARE IT WITH ALL THE PEOPLE OF THE GROUP /NAMES -->

    </body>




  </body>
</html>
