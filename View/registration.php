<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link href="../View/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../View/registration.css">
    <script type="text/javascript" src="../View/registration.js"></script>


  </head>
  <body>

 <form action = "../Controller/registration-controller.php" method="post">
    <div class="form-group">
    <div class="col-md-3"></div>
    <div class="col-md-6">
         <div class="row myborder">
             <h4 style="color: #7EB59E; margin: initial; margin-bottom: 10px;">Sign Up Now</h4><hr>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input  size="60" maxlength="255" class="form-control" placeholder="email" name="person_email" id="person_email" type="email" required >                                                       </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Password" name="person_password" id="person_password" type="password"  pattern=".{1,}" title="Six or more characters"required>                                    </div>

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock mycolor"></i></span>
                    <input size="60" maxlength="255" class="form-control" placeholder="Password Again" name="person_password2" id="person_password2" type="password"  pattern=".{1,}" title="Six or more characters" required>                                    </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="First Name" name="person_firstname" id="person_firstname" type="text" required>                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Last Name" name="person_name" id="person_name" type="text" required>                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Color" name="person_color" id="person_color" type="color" required>                                    </div>
                <div class="col-md-12">
                    <button class="btn-u pull-left" type="submit" onclick=" checkPassSame()">Sign Up</button>
                </div>
            </div>
      </div>
    </form>


  </body>
</html>
