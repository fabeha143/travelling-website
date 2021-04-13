<!DOCTYPE html>
<html>
<head>
	<title>Flights</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	
	<!-- slickSliderCssLink -->
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<!-- slickSliderCssLink -->
	
	<!-- UiLink -->
	<link rel="stylesheet" href="css/jquery-ui.css">
	<script src="js/jquery-ui.js"></script>
	<!-- UiLink -->
	
	<!-- fancybox-->
	 <script src="js/jquery.fancybox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <!-- fancybox-->
    
	<!-- validationScriptFile -->
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/additional-methods.min.js"></script>
	<!-- validationScriptFile -->
	
	<!-- sweetalert -->
	<script type="text/javascript" src="js/sweetalert.js"></script>
	<!-- sweetalert -->
	<!-- SocialMedia -->
  	<link rel="stylesheet" type="text/css" href="css/floating-share.css">
</head>
<body>
	<div class="loader">
		<img src="images/loader/loader.gif" alt="loader">
	</div>

	<header>
		<section class="header-sec" style="background-image: url(images/flights/bg-flights.jpg);">
			
			<div class="overlay"></div>
			<div class="header-nav">
				<div class="container">
					<div class="nav-div">
                        <div class="logo">
							<img src="images/index/logo.png" alt="">
						</div>
						<div class="nav-main1" style="padding: 25px 0px;">
							<nav>
								<ul>
                                    <li><a href="index.php">Home</a></li>
									<li><a href="flights.php">Flights</a></li>	
									<li><a href="hotel.php">Hotels</a></li>
									<li><a href="carhire.php">Car Hire</a></li>
									<li><a href="help.php">HELP</a></li>
                                    <li><a href="signup.php" id="register">REGISTER</a></li>
									
									<li><a href="login.php" id='login'><span>Login</span></a></li>
									
								</ul>
							</nav>
						</div>
						
				    </div>
				</div>
			</div>
			<div class="flights">
				<div class="container">
					<div class="flights-heading">
						<h1>Flights</h1>
						<p>Come Fly With Us</p>
					</div>
				</div>
			</div>
			

			 
             
			</div>
		</section>
	</header>
	<main>
		<section class="flights-form">
			<div class="container">
				<div class="flights-form1">
					<div class="heading-flights">
						<h2>Book Your Tickets</h2>
						<p>Book your tickets Now</p>
					</div>

					<form class="flight-main-form">
						
							<div><input type="text" name="from" placeholder="From"></div>
							<div><input type="text" name="to" placeholder="To"></div>
							<div><input type="text" name="return" placeholder="Return" class="datepicker"></div>
							<div><input type="text" name="depart" placeholder="Depart" class="datepicker"></div>
							<div><input type="text" name="passenger" placeholder="Passenger"></div>
					
						<div class="button-flight"><input type="submit" name="submit" value="SHOW FLIGHTS" class="flight-button"></div>
					</form>
				</div>
			</div>
		</section>
		<!-- Form -->

<section class="background-middle" style="background-image: url(images/flights/background-middle.jpg);">
	<div class="overlay"></div>
</section>
		

		<!-- //section -->
		
		<section class="flight-sec2">
			<div class="container">
				<div class="parent-sec2-flight">
					<div class="heaidng-flight-sec2">
						<h3>Our featured destinations!</h3>
						<p>Come visit the beautiful city</p>
					</div>
					<div class="parent-sec2-flight-div">
						<div class="div1-content">
							<div>
								<img src="images/flights/seatle.jpg" alt="seatle">
								<div class="flight-content-parent">
									<div>
										<h3>Seattle</h3>
										<p>From <br>PKR 37742* <br><span>ECONOMY</span></p>
									</div>
									<div><a href="#">BOOK NOW</a></div>
								</div>
							</div>
						</div>
						<div class="div1-content">
							<div>
								<img src="images/flights/sanfransisco.jpg" alt="San Francisco">
								<div class="flight-content-parent">
									<div>
										<h3>San Francisco</h3>
										<p>From <br>PKR 37742* <br><span>ECONOMY</span></p>
									</div>
									<div><a href="#">BOOK NOW</a></div>
								</div>
							</div>
						</div>
						<div class="div1-content">
							<div>
								<img src="images/flights/najaf.jpg" alt="najaf">
								<div class="flight-content-parent">
									<div>
										<h3>Najaf</h3>
										<p>From <br>PKR 37742* <br><span>BUSINESS</span></p>
									</div>
									<div><a href="#">BOOK NOW</a></div>
								</div>
							</div>
						</div>
						<div class="div1-content div1-content1" style="display: none;">
							<div>
								<img src="images/flights/baghdad.jpg" alt="baghdad"> 
								<div class="flight-content-parent">
									<div>
										<h3>Baghdad</h3>
										<p>From <br>PKR 37742* <br><span>ECONOMY</span></p>
									</div>
									<div><a href="#">BOOK NOW</a></div>
								</div>
							</div>
						</div>
						<div class="div1-content div1-content1" style="display: none;">
							<div>
								<img src="images/flights/chicago.jpg" alt="Chicago">
								<div class="flight-content-parent">
									<div>
										<h3>Chicago</h3>
										<p>From <br>PKR 37742* <br><span>ECONOMY</span></p>
									</div>
									<div><a href="#">BOOK NOW</a></div>
								</div>
							</div>
						</div>
						<div class="div1-content div1-content1" style="display: none;">
							<div>
								<img src="images/flights/newyork.jpg" alt="New York">
								<div class="flight-content-parent">
									<div>
										<h3>New York</h3>
										<p>From <br>PKR 37742* <br><span>BUSINESS</span></p>
									</div>
									<div><a href="#">BOOK NOW</a></div>
								</div>
							</div>
						</div>
						<div class="div1-content div1-content1" style="display: none;">
							<div>
								<img src="images/flights/dalas.jpg" alt="Dalas">
								<div class="flight-content-parent">
									<div>
										<h3>Dalas</h3>
										<p>From <br>PKR 37742* <br><span>ECONOMY</span></p>
									</div>
									<div><a href="#">BOOK NOW</a></div>
								</div>
							</div>
						</div>
						<div class="div1-content div1-content1" style="display: none;">
							<div>
								<img src="images/flights/doha.jpg" alt="Doha">
								<div class="flight-content-parent">
									<div>
										<h3>Doha</h3>
										<p>From <br>PKR 37742* <br><span>ECONOMY</span></p>
									</div>
									<div><a href="#">BOOK NOW</a></div>
								</div>
							</div>
						</div>
						<div class="div1-content div1-content1" style="display: none;">
							<div>
								<img src="images/flights/washington.jpg" alt="Washington">
								<div class="flight-content-parent">
									<div>
										<h3>Washington</h3>
										<p>From <br>PKR 37742* <br><span>ECONOMY</span></p>
									</div>
									<div><a href="">BOOK NOW</a></div>
								</div>
							</div>
						</div>

					</div>
					<div class="div1-content-more"><a href="#" class="see-all-flights">SEE ALL</a></div>
				</div>

			</div>
		</section>
	</main>
	<footer>
		<section class="section3">
			<div class="container">
				<div class="footer">
				<div><img src="images/index/logo.png" alt=""></div>
					<p>Copyright <span> &copy;</span> 2016</p>
					
				</div>
			</div>
		</section>
	</footer>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/floating-share.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>