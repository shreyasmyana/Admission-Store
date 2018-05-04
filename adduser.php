<?php

$con=mysqli_connect("localhost","root","","astore");
//mysqli_select_db($con, "login");

if (!$con) 
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
//echo "success";
?>

<?php
}

$query1="select username from users where username='$_POST[username]'";
//"select * users where username ='$_POST[username]'";
$res1=mysqli_query($con, $query1);
$count=mysqli_num_rows($res1);
if($count!=0)
{
echo "Provided username is already in use.";
echo "try to sign up again <a href=\"signup.php\"> Signup</a>";
}
else
{
$query="INSERT INTO users (username,password,email)VALUES('$_POST[username]','$_POST[password]','$_POST[email]')";
$res=mysqli_query($con, $query);

if ($res) 
{

    echo "<br><h4>New record created successfully</h4>";
	echo "<a href=\"login.php\"> Now login at your Account<a>";
	}
else 
{
    echo "Something Went Wrong Please Try again";
}
}
mysqli_close($con);
?>

