<?php
$con = mysqli_connect("localhost", "root", "","astore");
//$db = mysqli_select_db($con, "login");

session_start(); 

if(isset($_SESSION['login_user']) == "")
	{
		echo "You are not logged in<br/>";
                echo "<a href=\"login.php\">Please Login</a>";
		//header('location: login.php');
}
else
{
$user_check = $_SESSION['login_user'];
$ses_sql=mysqli_query($con, "select * from users where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">

<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">

	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="index.html"><img src="img/logo1.png" height="120px" width="150px" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li> 
						<li class="active"><a href="about.html">About Us</a></li>
						<li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Colleges</a></li>
                       
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login.html">Welcome <?php echo $row['username']; ?> </a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Profile  </h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">


<body>

<center>
<table>
<tr>
<td><b>Welcome :</td><i><td><?php echo $row['username']; ?></i></td></b>
</tr>
<tr>
</table>

<b><a href="logout.php">Log Out</a></b>


</body>

</html>
<?php
mysqli_close($con); // Closing Connection
} 
?>
