<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Groupe</title>
    <link href="../View/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../View/registration.css">
    <script type="text/javascript" src="../View/js/creategroup.js"></script>


  </head>
  <body>

 <form action = "../Controller/createGroup-Controller.php" method="post">
    <div class="form-group">
    <div class="col-md-3"></div>
    <div class="col-md-6">
         <div class="row myborder">
             <h4 style="color: #7EB59E; margin: initial; margin-bottom: 10px;">Create a Group</h4><hr>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input  size="60" maxlength="255" class="form-control" placeholder="Choose A Name For Your Groupe" name="group_name" id="group_name" type="text" required >   </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Add A Password" name="group_password" id="group_password" type="password"  pattern=".{1,}" title="Six or more characters"required>
             </div>

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock mycolor"></i></span>
                    <input size="60" maxlength="255" class="form-control" placeholder="Password Verification" name="group_password2" id="group_password2" type="password"  pattern=".{1,}" title="Six or more characters" required>
                  </div>

                <div class="col-md-12">
                    <button class="btn-u pull-left" type="submit" onclick="checkPassSame()">Create the Group</button>
                </div>
            </div>
      </div>
    </form>


  </body>
</html>
