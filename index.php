<!DOCTYPE html>
<html>
<head>
	<title>Final Assignment</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.5.1.min.js"></script>
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0">
    <link rel=”stylesheet” href=boorstrap-css/bootstrap.css”>
    <link rel=”stylesheet” href=boorstrap-css/bootstrap-responsive.css”>
	
	<!-- slickSliderLink -->
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<script src="js/slick.min.js"></script>
	<!-- slickSliderLink -->
	
    <!-- fancybox-->
	 <script src="js/jquery.fancybox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
    <!-- fancybox-->

    <!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- font awsome -->
	
	<!-- UiLink -->
	<link rel="stylesheet" href="css/jquery-ui.css">
	<script src="js/jquery-ui.js"></script>
	<!-- UiLink -->

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
		<!-- Nav -->
		<section class="header-sec" style="background-image: url(images/index/bgheader.jpg);">
			<div class="header-nav">
				<div class="container">
					<div class="nav-div">
                        <div class="logo">
							<img src="images/index/logo.png" alt="">
						</div>
						<div class="nav-main1" style="padding: 25px 0px;">
							<nav class=”navbar fixed-top navbar-expand-md navbar-light bg-light”>
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
			
			  
              



			<!-- form flight--> 
			<div class="form1">
				<div class="container">
					<div class="all-form-sec">
						<div  class="form-parent">
							<form id="myform">
								<div class="form-inputs">
									<label>CATEGORY</label>
									<select class="selected-class" name="flights">
										<option value="">Flights</option>
										<option value="domestic" id="domestic">Domestic</option>
										<option value="international" id="international">International</option>
									</select>
								</div>
								<div class="form-inputs">
									<label>From</label>
									<select class="selected-class" name="from1" >
										<option value ="">CHOOSE</option>
										<option value="Karachi">Karachi</option>
										<option value="Lahore">Lahore</option>
										<option value="Islamabad">Islamabad</option>
										<option value="Sukker">Sukker</option>
										<option value="Uk">Uk</option>
										<option value="Canada">Canada</option>
									</select>
								</div>
								<div class="form-inputs" >
									<label>TO</label>
									<select class="selected-class" id="to" name="to1">
										<option value="">CHOOSE</option>
										<option value="Karachi">Karachi</option>
										<option value="Lahore">Lahore</option>
										<option value="Islamabad">Islamabad</option>
										<option value="Sukker">Sukker</option>
										<option value="London">London</option>
										<option value="Toronto">Toronto</option>
									</select>
								</div>
								<div class="form-inputs">
									<label>DEPART</label>
									<input type="text" name="date1" placeholder="Date" class="selected-class datepicker">
								</div>
								<div class="form-inputs">
									
									<label>RETURN</label>
									<input type="text" name="date2" placeholder="Date" class="selected-class datepicker" >
								</div>
								<div class="form-inputs" style="border-bottom:none;">
									
									<label>CABIN & TRAVELLERS</label>
									<select class="selected-class" name="cabin">
										<option value="">CHOOSE</option>
										<option value="economy">Economy</option>
										<option value="business">Business</option>
									</select>

								</div>
								<div><input type="submit" value="SEARCH!" class="button"></div>
							</form>
						</div>
						<div class="result-form" id="result">
							<h1><span>Lahore</span> flights for 2219 $</h1>
							<p>Hurry to take advantage of the limited number of tickets !</p>
							<div>
								<div><img src="images/index/place.png" alt="place"><p>Toronto.Canada</p></div>
								<div><img src="images/index/timezone.png" alt="timezone"><p>18:15 GMT+2</p></div>
								<div><img src="images/index/rain.png" alt="rain"><p>Rainy,7.c</p></div>
								<div><img src="images/index/flight.png" alt="flight"><p>+315 flights</p></div>
								<div><img src="images/index/hotel.png" alt="hotel"><p>+72 Hotels</p></div>
							</div>
						</div>
					</div>	

				</div>
			</div>
		</section>
		<!-- form -->
	</header>
	<main>
		<!-- slider -->
		<section class="slider">
			<div class="container">
				<div class="slider-sec-heading">
					<h3>TOURS</h3>
					<p>Travel packages for every budget. Which one  is yours?</p>
				</div>
				<div class="parent-slider">
					<div class="slider-div">
						
						<div><img src="images/index/bg2info.png" alt="background"></div>
						<div>
							<p>Eastern Eurpean architectural <br>building tours</p>
							<div class="icons-slider">
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider1.png" alt="icon"></div>
									<p>59 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider2.png" alt="icon"></div>
									<p>218 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/car.png" alt="icon"></div>
									<p>72 &#8946;</p>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-div">
						<div><img src="images/index/bg1info.png" alt="background"></div>
						<div>
							<p>New year tours in town like <br>fairy tales</p>
							<div class="icons-slider">
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider1.png" alt="icon"></div>
									<p>179 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider2.png" alt="icon"></div>
									<p>147 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/car.png" alt="icon"></div>
									<p>36 &#8946;</p>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-div">
						<div><img src="images/index/bg3info.png" alt="background"></div>
						<div>
							<p>A wide choice of domestic ski <br> tours</p>
							<div class="icons-slider">
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider1.png" alt="icon"></div>
									<p>126 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider2.png" alt="icon"></div>
									<p>82 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/car.png" alt="icon"></div>
									<p>65 &#8946;</p>
								</div>
							</div>
						</div>
					</div>

					<div class="slider-div" id="div-different">
						<div><img src="images/index/bg4info.png" alt="background"></div>
						<div>
							<p>Warm sea tours in cold <br>building tours</p>
							<div class="icons-slider">
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider1.png" alt="icon"></div>
									<p>835 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider2.png" alt="icon"></div>
									<p>121 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/car.png" alt="icon"></div>
									<p>59 &#8946;</p>
								</div>
							</div>
						</div>
					</div>

					<div class="slider-div" >
						<div><img src="images/index/bg1info.png" alt="background"></div>
						<div>
							<p>New year tours in town like <br>fairy tales</p>
							<div class="icons-slider">
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider1.png" alt="icon"></div>
									<p>179 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/iconslider2.png" alt="icon"></div>
									<p>147 &#8946;</p>
								</div>
								<div class="icon-div-slider">
									<div><img src="images/index/car.png" alt="icon"></div>
									<p>36 &#8946;</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="parent-button1">
					<div class="last-button"><a href="#">SEE ALL TOURS</a></div>
				</div>
			</div>
		</section>

		<!-- slider -->
		<!-- AsmaWork -->
		<section class="sec-div-exchange">
			<div class="container">
				<div class="parent-exchange">
					<p>THESE CITIES ARE VERY POPULAR!</p>				
					<nav class="main-nav-exchange">
						<ul>
							<li class="tabilisi"><a href="#">TBILISI</a> <span>...</span></li>
							<li class="londra"><a href="#">LONDRA</a> <span>...</span></li>
							<li class="newyork"><a href="#">NEW YORK</a> <span>...</span></li>
							<li class="berlin"><a href="#"><span class="berlin-nav">BERLIN</span></a><span>...</span></li>
							<li class="budapest"><a href="#">BUDAPEST</a><span>...</span></li>
							<li class="paris"><a href="#">PARIS</a><span>...</span></li>
							<li class="istanbul"><a href="#">ISTANBUL</a></li>
						</ul>
					</nav>
					<div class="parent-filtering-div berlin">
						<div class="img1"><img src="images/index/image-1.png" alt="berlin"></div>
						<span>GETTING TO BERLIN!<img src="images/index/arrow.png" alt="arrow"></span>
						<div class="img2"><img src="images/index/image-2.png" alt="berlin"></div>
						<div class="img3"><img src="images/index/image-3.png" alt="berlin"></div>
					</div>
					<div class="parent-filtering-div tabilisi" style="display: none;">
						<div class="img1"><img src="images/index/tib1.jpg" alt="tabilisi"></div>
						<span>GETTING TO TABILISI!<img src="images/index/arrow.png" alt="arrow"></span>
						<div class="img2"><img src="images/index/tib2.jpg" alt="tabilisi"></div>
						<div class="img3"><img src="images/index/tib3.jpg" alt="tabilisi"></div>
					</div>
					<div class="parent-filtering-div londra" style="display: none;">
						<div class="img1"><img src="images/index/londra1.jpg" alt="londra"></div>
						<span>GETTING TO LONDRA!<img src="images/index/arrow.png" alt="arrow"></span>
						<div class="img2"><img src="images/index/londra2.png" alt="londra"></div>
						<div class="img3"><img src="images/index/londra3.jpeg" alt="londra"></div>
					</div>
					<div class="parent-filtering-div newyork" style="display: none;">
						<div class="img1"><img src="images/index/budapet1.jpg" alt="new york"></div>
						<span>GETTING TO NEW YORK!<img src="images/index/arrow.png" alt="arrow"></span>
						<div class="img2"><img src="images/index/budapet2.jpg" alt="new york"></div>
						<div class="img3"><img src="images/index/budapet3.png" alt="new york"></div>
					</div>
					<div class="parent-filtering-div budapest" style="display: none;">
						<div class="img1"><img src="images/index/budapet1.jpg" alt="budapest"></div>
						<span>GETTING TO BUDAPEST!<img src="images/index/arrow.png" alt="arrow"></span>
						<div class="img2"><img src="images/index/budapet2.jpg" alt="budapest"></div>
						<div class="img3"><img src="images/index/budapet3.png" alt="budapest"></div>
					</div>
					<div class="parent-filtering-div paris" style="display: none;">
						<div class="img1"><img src="images/index/paris1.jpg" alt="paris"></div>
						<span>GETTING TO PARIS!<img src="images/index/arrow.png" alt="arrow"></span>
						<div class="img2"><img src="images/index/paris2.jpeg" alt="paris"></div>
						<div class="img3"><img src="images/index/paris3.jpg" alt="paris"></div>
					</div>
					<div class="parent-filtering-div istanbul" style="display: none;">
						<div class="img1"><img src="images/index/istanbul1.jpg" alt="istanbul"></div>
						<span>GETTING TO ISTANBUL!<img src="images/index/arrow.png" alt="arrow"></span>
						<div class="img2"><img src="images/index/istanbul2.jpg" alt="istanbul"></div>
						<div class="img3"><img src="images/index/istanbul3.jpg" alt="istanbul"></div>
					</div>
				
				</div>
			</div>
		</section>
	<section class="section2">
		<div class="container">
			<div class="near-places">
				<div>
					<h2>NEAR PLACES</h2>
					<span>Reward your self somewhere on the weekends!</span>
				</div>
				<div class="option">
					<a href="#">
						<div>
							<img src="images/index/camera.png" alt="camera" class="height">
							<span>Photography</span>
						</div>
					</a>
					<a href="#">
						<div>
							<img src="images/index/family.png" alt="family" class="height">
							<span>Family</span>
						</div>
					</a>
					<a href="#">
						<div>
							<img src="images/index/freinds.png" alt="family">
							<span>Friends</span>
						</div>
					</a>
						<div>
							<img src="images/index/romantic.png" alt="romantic" class="height">
							<span>Romantic</span>
						</div>
					
					<a href="#">
						<div>
							<img src="images/index/nature.png" alt="nature">
							<span>Nature</span>
						</div>
					</a>
					<a href="#">
						<div>
							<img src="images/index/posh.png" alt="posh" class="height">
							<span>Posh</span>
						</div>
					</a>
				</div>
				<div class="hotel">
					<div class="category">
					 
						<div>
							<img src="images/index/image-6.png" alt="image-6">
						</div>
						<div class="flex">
							<div><span>Gamirasu Kapadokya</span></div>
							<div> <img src="images/index/rating.png" alt="rating">   </div>
						</div>
						<div class="flex">
							<div>
								<img src="images/index/iconslider1.png" alt="iconslider1">
							</div>
							<div><p>179 &#8946;</p></div>
							<div>
								<img src="images/index/iconslider2.png" alt="iconslider2" >
							  </div>
							  <div><p>147 &#8946;</p></div>
							  <div><img src="images/index/car.png" alt="car"></div>
							  <div><p>36 &#8946;</p></div>
						</div>
					</div>
					<div class="category">
						<div>
							<img src="images/index/image-5.png" alt="image-5">
						</div>
						<div class="flex">
							<div><span style="margin-right: 44px;">Gural Sapanca</span></div>
							<div> 
								<img src="images/index/rating.png" alt="rating">
							</div>
						</div><!--flex-->
						<div class="flex">
							<div>
								<img src="images/index/iconslider1.png" alt="iconslider1">
							</div>
							<div><span class="dot"></span></div>
							<div>
								<img src="images/index/iconslider2.png" alt="iconslider2" >
							</div>
							<div><p>121 &#8946;</p></div>
							<div><img src="images/index/car.png" alt="car"></div>
							<div><p>22 &#8946;</p></div>

						</div>
					</div>
					<div class="category">
						<div>
							<img src="images/index/image-4.png" alt="image-4">
						</div>
						<div class="flex">
							<div>
								<span style="margin-right: 170px;">Barbaros,Bag Evi Tekirdag</span>
							</div>
						</div>
						<div class="flex">
							<div>
								<img src="images/index/iconslider1.png" alt="iconslider1">
							</div>
							<div><span class="dot"></span></div>
							<div>
								<img src="images/index/iconslider2.png" alt="iconslider2" >
							</div>
							<div><p>82 &#8946;</p></div>
							<div><img src="images/index/car.png" alt="car"></div>
							<div><p>65 &#8946;</p></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- AsmaWork -->
	</main>
	<footer class=”container mt-4">
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