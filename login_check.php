<?php
session_start(); 
	//if (isset($_POST['submit'])) 
	//{
		if (empty($_POST['username']) || empty($_POST['password']))
		 {
			echo "Username or Password is invalid";   
			echo "<a href=\"login.php\">Please Login</a>";
		
		 }
		else
			{
				$username=$_POST['username'];
				$password=$_POST['password'];

				$username = stripslashes($username);
				$password = stripslashes($password);
				
		$con = mysqli_connect("localhost", "root", "","astore");
		//$db = mysqli_select_db($con, "login");
		$query ="select * from users where password='$password' AND username='$username'";
		$res=mysqli_query($con, $query);
		$rows = mysqli_num_rows($res);
		if ($rows == 1) 
			{
				$_SESSION['login_user']=$username; 
				header("location: index2.php");
			}
			 else 
				{
					echo "Username or Password is not match"; 
                    echo "<a href=\"login.php\">Please Login</a>";
		
				}
		mysqli_close($con); // Closing Connection
			}
	//}
?>
