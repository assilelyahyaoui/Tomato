<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Join a group</title>
    <!-- jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../View/css/jquery-ui.min.css">
    <script src="../View/css/jquery-ui.min.js"></script>

    <link href="../View/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../View/css/addActivity.css">
    <?php include_once( '../View/navBar.php'); ?>

  </head>
  <body>

    <body>
      <h1>Add a Journey</h1>

      <form action = "../Controller/joinGroup-Controller.php" method="post">
        <div class="form-group">
          <label for="group_name">Enter the Name of your Group</label>
          <input type="text" class="form-control" id="group_name"  name="group_name" placeholder="Enter the Group Name" required>
        </div>

        <div class="form-group">
          <label for="group_password">Enter the Group's Password </label>
          <input type="password" class="form-control" id="group_password"  name="group_password" placeholder="Password here" required>
        </div>


        <button type="submit" class="btn btn-danger">Submit</button>
      </form>

      <!-- CREATING YOUR JOURNEY HERE WILL SHARE IT WITH ALL THE PEOPLE OF THE GROUP /NAMES -->

    </body>




  </body>
</html>
