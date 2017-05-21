<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./registration.css">

    <form action = "./Controller/registration-controller.php" method="post">
    <div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
         <div class="row myborder">
             <h4 style="color: #7EB59E; margin: initial; margin-bottom: 10px;">Sign Up Now</h4><hr>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="email" name="UserRegistration[email]" id="person_username" type="text">                                                        </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Password" name="UserRegistration[password]" id="person_password" type="password">                                    </div>

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock mycolor"></i></span>
                    <input size="60" maxlength="255" class="form-control" placeholder="Password Again" name="UserRegistration[password]" id="person_password2" type="password">                                    </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="First Name" name="UserRegistration[fname]" id="person_firstname" type="text">                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Last Name" name="UserRegistration[lname]" id="person_name" type="text">                                    </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope mycolor"></i></span>
                <input size="60" maxlength="255" class="form-control" placeholder="Color" name="UserRegistration[color]" id="person_color" type="text">                                    </div>
                <div class="col-md-12">
                    <button class="btn-u pull-left" type="submit">Sign Up</button>
                </div>
            </div>
        </div>
  </body>
</html>
