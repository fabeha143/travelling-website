<!DOCTYPE html>
<html>
<head>
	<title>Car Hire</title>
	
	<link rel="stylesheet" href="css/style.css">
     <script src="js/jquery-3.5.1.min.js"></script>

	<!-- SlickSlider -->
	<link rel="stylesheet" type="text/css" href="css/slick.css">
    <script src="js/slick.min.js"></script>
	<!-- SlickSlider -->

	<!-- fancybox-->
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <script src="js/jquery.fancybox.min.js"></script>
	<!-- fancybox js -->
	  
	<!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awsome -->

    <!-- validationScriptFile -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/additional-methods.min.js"></script>
    <!-- validationScriptFile -->

    <!-- UiLink -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-ui.js"></script>
    <!-- UiLink -->

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
		<section class="header-sec" style="background-image: url(images/carhire/car.jpg);">
			
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
						<h1>Car Hire</h1>
						<p>Lets take a ride!</p>
					</div>
				</div>
			</div>
			

			 
              
		</section>
	</header>
	<!-- Header -->
	<main>
		<section class="carhire-sec1">
			<div class="container">
				<div class="carhire-sec1-parent">
					<div class="car-hire-book">
						<h2>Book Your Ride</h2>
						<p>Lets take a ride</p>
					</div>
					<div class="car-hire-form-parent">
						<div class="car-hire-form">
							<form class="carhire-form">
								<h3>Car Hire Form</h3>
								<div>
									<input type="text" name="name" placeholder="Name">
								</div>
								<div>
									<input type="text" name="city" placeholder="City">
								</div>
								<div>
									<input type="text" name="country" placeholder="Country">
								</div>
								<div>
									<input type="text" name="date" placeholder="Hire Date" class="datepicker">
								</div>
								<div>
									<select class="carhire-car" name="carhireselect">
										<option value="">Choose Car</option>
										<option value="marcedese">Marcedese</option>
										<option value="carolla">Carolla</option>
										<option value="city">City</option>
										<option value="lamborgini">Lamborgini</option>
									</select>
								</div>
								<div><input type="submit" name="submit" class="carhire-button"></div>
							</form>
						</div>
					
					</div>
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



	<script src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/floating-share.js"></script>
	<script src="js/script.js"></script>
</body>
</html>