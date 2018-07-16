<?php

include'common.php';


if(isset($_SESSION['email'])){
    header('location:product.php');
}

?>


<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forms in Bootstrap</title>
        <style>


              .container1{
                 padding: 0 auto;
                  margin: auto;
                  margin-top: 7%;
              }
            body{
                padding: 0px;
                margin: 0px;
            }
            .cont{
                margin-top: 15%;
            }
            </style>
            </head>
    <body>
      <?php
   include'header.php';
         ?>
         <div class="cont">
          <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" id='email' placeholder="Email" name="email"required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id='password' placeholder="Password" name="password"  required="true">
                                </div>
                                <button type="submit" id=login_btn name="login_btn" class="btn btn-primary" >Login</button><br><br>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="sign%20up.html">Register</a></p></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php
           include'footer.php';
        ?>




    </body>
</html>
