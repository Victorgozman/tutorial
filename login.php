<?php  
session_start();//session starts here  
  
?> 



<!DOCTYPE html>
<html lang="en">
	<head>
		<title>login-page</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	
	
	
	<body>
		<div class="container" >
			<div class="Register">
				<h3>SIGN IN</h3>
			</div>
			<div class="form-body">
				<form method="post" action="login.php">
					
					<input type="text" name="email" placeholder="Email" autofocus ><br><br>
					
					<input type="password" name="pass" placeholder="Your password" autofocus><br>
					
					<input class="register" type="submit" name="login" value="Login">
				</form>
				</div>
		
		</div>
	
	</body>
</html>




<?php  
  
include("dbconnection.php");  
  
if(isset($_POST['login']))  
{  
    $email=$_POST['email'];  
    $pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$email' AND user_pass='$pass'";  
  
    $run=mysqli_query($db,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  