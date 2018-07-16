

<?php

include 'common.php';


        $password = $_POST['old_password'];
$pass=md5($password);
        $newpass = $_POST['new_password'];
$newpassword=md5($newpass);
        $confirm = $_POST['confirmnewpassword'];
$confirmnewpassword=md5($confirm);
        $result = mysql_query("SELECT password FROM users WHERE 
password='$pass'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE users SET password='$newpassword' where 

 password='$password'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
             header("location: product.php");
        }
       else
        {
       echo "Passwords do not match";
       }
    


?>

          