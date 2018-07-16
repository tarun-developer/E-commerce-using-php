<?php
   include"common.php";




   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
      $pass=md5($mypassword);
      $sql = "SELECT id FROM users WHERE email = '$myusername' and password = '$pass'";
      echo("$pass");
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         $_SESSION['email'] = $myusername;
         $_SESSION['id']=mysqli_insert_id($con);
         header("location: product.php");
      }else {
          $error = "Your Login Name or Password is invalid";



      }
   }
?>
