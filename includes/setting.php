<?php
include'common.php';

?>
   <html>


    <head>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
.opv{
margin-top:120px;
padding: 50px;
border: 5px;
padding: 0 auto;
margin-bottom: 140px;

}
#footer1{
  height: 40px;
  align-content:center;
  padding:10px;
  text-align: center;
  background-color: black;
}
          </style>

        <title>settings</title>
    </head>
    <body>

    <?php
        include'header.php';
         ?>
          <div class="container">
       <div class="center opv">
        <div class="container-fluid">

            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3" >

                       <h2>Change Password</h2>

                  <form>
                            <div class="form-group"method="POST" action="setting_script.php">
                                <input class="form-control" placeholder="Old Password" name="old_password"  id="old_password"required = "true">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name="new_password" id="new_password"required = "true">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" id="confirm_password "name="confirm_password" required = "true">
                            </div>
                            <button type="submit" name="submit"id="setting_script" class="btn btn-primary"value=”setting_script.php”>Change</button>
                        </form>
                  </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
<div id="footer1">
         <?php
        include'footer.php';
        ?>
</div>



    </body>
</html>
