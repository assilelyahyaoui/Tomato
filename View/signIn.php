<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <!-- jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./View/css/jquery-ui.min.css">
    <script src="./View/css/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./View/js/signIn.js"></script>


    <link rel="stylesheet" type="text/css" href="./View/css/signIn.css">
    <link href="./View/css/bootstrap.css" rel="stylesheet">

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--<div class="pr-wrap">
                     <div class="pass-reset">
                        <label>  Enter the email you signed up with</label>
                        <input type="email" placeholder="Email" id="signInReset-email" />
                        <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" id="signInReset-password"/>
                    </div>
                </div>-->
                <div class="wrap">
                    <p class="form-title"> Sign In</p>

                    <form action = "choose-group" method="post" >
                    <div class="login">
                      <input type="text" class="login" placeholder="E-mail" name ="signIn-email" id="signIn-email" />
                    </div>
                    <div class="login">
                      <input type="password" class="login" placeholder="Password" name = "signIn-password" id="signIn-password"/>
                    </div>

                    <div class="login">
                      <button type="submit" class="btn btn-primary">Sign in </button>

                    </div>

                            <div class="col-md-6 forgot-pass-content">
                                <a href="./Controller/signUp-Controller.php" class="Sign Up">Sign Up!</a>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>
