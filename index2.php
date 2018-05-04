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
<html>
<head>

<title>Admission Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- css -->

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="et-line-font/style.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page">
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
                    <a class="navbar-brand" href="index.html"><img src="img/logo1.png" height="145px" width="155px" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li> 
						<li><a href="about.html">About Us</a></li>
						<li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Colleges</a></li>
                        <li><a href="contact.html">Contact</a></li>
			<li><a href="profile.php">Welcome <?php echo $row['username']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/6.jpg" alt="" />
                <div class="flex-caption">
                    <h3>CARRIER</h3> 
					<p>GET ADMISSION IN TOP COLLEGES OF INDIA</p> 
					 
                </div>
              </li>
              <li>
                <img src="img/slides/5.jpg" alt="" />
                <div class="flex-caption">

                    <h3>CHOOSE THE RIGHT COURSES AND COLLEGE</h3> 
                     <p> BEST ADMISSION CONSULTANCY OF PUNE </p>


					 
                </div>
              </li>
            </ul>



        </div>
	<!-- end slider -->
 
	</section>
	<section class="hero-text">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="aligncenter"><h1 class="aligncenter">WELCOME TO ADMISSION STORE</h1>Now easily get admission in best engineering,diploma,bba and management colleges of Pune,Uttrakhand,U.P,westbengal and in various best colleges of India<h2 class="aligncenter">
NO DONATION ANY MORE
<h3 class="aligncenter">
WE WILL GUIDE YOU</div>
				
			</div>
		</div>
	</div>
	</section>
	
	
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">Our Services</h2></div>
				<br/>
			</div>
		</div>
			<div class="row">
		<div class="skill-home"> <div class="skill-home-solid clearfix"> 
		<div class="col-md-3 text-center">
		<span class="icons c1"><i class="icon-phone"></i></span> <div class="box-area">
		<h3>Carrier counselling</h3> <p>Admission Store provides unique facility of carrier counselling throughout the year.Feel free to ask any kind of doubts to our experts.</p></div>
		</div>
		<div class="col-md-3 text-center"> 
		<span class="icons c2"><i class="icon-tools"></i></span> <div class="box-area">
		<h3>Admission Guidance</h3> <p>Get Guidance for colleges that offer your desired course like their location, affiliation, fees, placement, review, & latest updates.</p></div>
		</div>
		<div class="col-md-3 text-center"> 
		<span class="icons c3"><i class="icon-gift"></i></span> <div class="box-area">
		<h3>Local Guardian Services</h3> <p>We have a strong team of people across various states of India which will guide you during the entire Admission process </p></div>
		</div>
		<div class="col-md-3 text-center"> 
		<span class="icons c3"><i class="icon-phone"></i></span> <div class="box-area">
		<h3>What to do?</h3> <p>We have expertise who will guide you,how to start your higher education </p></div>
		</div>
		</div></div>
		</div></div>
		</div> 
	 

	</div>
	</section>
	<div class="features-content">

                <div class="row features-content-row">
                    <div class="col-sm-6 home-img  img">
                        <div class="home-img-inner ">
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-6 home-img">
                        <div class="home-img-inner our-features">
                           <h3 class="wow animated fadeInDownfadeInRight animated">Our Awesome Features</h3>
                        <div class="features-box wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="features-box-icon">
                                <i class="icon-search"></i>
                            </div><!--services icon-->
                            <div class="features-box-info">
                                <h4>Top Admission consultancy</h4>
                                <p>
                                   Admission Store is the top and best admission consultancy in Pune
                                </p>
                            </div>
                        </div><!--service box-->
                        <div class="features-box wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="features-box-icon">
                                <i class="icon-envelope"></i>
                            </div><!--services icon-->
                            <div class="features-box-info">
                                <h4>Strong Team</h4>
                                <p>
                                 Admission Store have a very strong and best team in many states of India,who will guide you in your admission
                                </p>
                            </div>
                        </div><!--service box-->

                        <div class="features-box wow animated fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="features-box-icon">
                                <i class="icon-bargraph"></i>
                            </div><!--services icon-->
                            <div class="features-box-info">
                                <h4>WHAT TO DO AFTER 10TH or 12TH?</h4>
                                <p>
                                    NO NEED TO WORRY ANY MORE.
                                    OUR EXPERTS ARE AVAILABLE FOR YOU THROUGHOUT THE YEAR,WITHOUT ANY CHARGES.
                                    FEEL FREE TO CALL US.

                                </p>
                            </div>
                           
                        </div><!--service box-->
						
						 

                        </div>
                    </div>
                </div>
            </div>
		 
	<section id="clients">
        <div class="container">
            	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter">COLLEGES</h2>You can get admission in Top colleges of Pune,Dehradun,Kolkatta,Jaipur,U.P etc.List of Some best colleges is given below..</div>
				<br/>
			</div>
		</div>
            <div class="row">
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
                
            </div>
        </div>
    </section>
	
	<section class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote">
                    <i class="icon-megaphone"></i>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <p> The harder you work,the luckier you get</p>
                        <p>
                            <b>- Admission Store -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>We are the best admission consultancy of pune</p>
                        <p>
                            <b>- Admission Store -</b>
                        </p>
                    </div>
                    <div class="item active">
                        <p>We will attend your calls throughout the year,feel free to cal us</p>
                        <p>
                            <b>- Admission Store -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>success occurs when your dream becomes bigger than your excuses.</p>
                        <p>
                            <b>- Admission Store -</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>GOKULNAGAR,PUNE</address>
					<p>
						<i class="icon-phone"></i> +91 7507934359,+91 8809380572 <br>
						<i class="icon-envelope-alt"></i> storeadmission@gmail.com
					</p>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy;  2018 All right reserved. By </span><a href="http://teckstore.co.in" Assure="_blank">Teck Store</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="http://facebook.com/" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://twitter.com/" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="http://linkedin.com/" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="http://plus.google.com/" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php
mysqli_close($con); // Closing Connection
} 
?>














































