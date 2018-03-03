<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>CSU Pueblo Online Site</title>		
		<meta name="keywords" content="CSU Pueblo Online" />
		<meta name="description" content="CSU Pueblo Online">
		<meta name="author" content="Rob Seaman / Contractor">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css"> -->

		<link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="js/vendor/bootstrap/bootstrap.css">
		<link rel="stylesheet" href="js/vendor/fontawesome/css/font-awesome.css">
		

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="js/vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="js/vendor/circle-flip-slideshow/css/component.css" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="js/vendor/modernizr/modernizr.js"></script>

		<!-- Favicon -->
  		<link rel="icon" type="image/png" href="favicon.png" />

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond/respond.js"></script>
			<script src="vendor/excanvas/excanvas.js"></script>
		<![endif]-->

	</head>
	<body>

	<div class="body">

		<header id="header">
			<div class="container">
				<div class="logo">
					<a href="index.html">
						<img alt="CSU Pueblo Online"  data-sticky-width="180" data-sticky-height="73" src="img/logo.png" width="180" height="73">
					</a>
				</div>
				<div class="search">
					<form id="searchForm" action="" method="get">
						<div class="input-group">
							<input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required>
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
				</div>
				<nav>
					<ul class="nav nav-pills nav-top">
						<li class="phone">
						 <a href="tel:+18442580251" id="icon_call">
							<span><i class="fa fa-phone"></i>844-258-0251</span>
						 </a>
						</li>
					</ul>
				</nav>
				<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
					<i class="fa fa-bars"></i>
				</button>
			</div>
			<div class="navbar-collapse nav-main-collapse collapse">
				<div class="container">
					<nav class="nav-main mega-menu">
						<ul class="nav nav-pills nav-main" id="mainMenu">
							<li>
								<a  href="#">Home</a>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#">
									Academic Programs
									<i class="fa fa-angle-down"></i>
								</a>
									<ul class="dropdown-menu">
										<li><a href="construction.html">Construction Management</a></li>
									</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#">
									Admissions
									<i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="enrollment.html">Enrollment</a></li>
									<li><a href="tuition.html">Tuition and Rates</a></li>
									<li><a href="financial-aid.html">Financial Aid</a></li>
									<li><a href="paymentOptions.html">Payment Options</a></li>
								</ul>
							</li>
						 </ul>
					 </nav>
				</div>
			</div>
		</header>

		<div role="main" class="main">

			<div class="slider-container">
				<div class="slider" id="revolutionSlider" data-plugin-revolution-slider data-plugin-options='{"startheight": 500}'>
					<ul>
						<li data-transition="fade" data-slotamount="10" data-masterspeed="300">
							<img src="img/home-photo1.jpg" data-bgfit="cover" data-bgposition="right top" data-bgrepeat="no-repeat" alt="CSU Pueblo Online Welcome photo" >

								
								<div class="tp-caption main-label sft stb"
									 data-x="left" data-hoffset="75"
									 data-y="50"
									 data-speed="300"
									 data-start="1200"
									 data-easing="easeOutExpo">Welcome to <br/> CSU Pueblo Online</div>

								
								<a class="tp-caption customin btn btn-lg btn-primary main-button" href="#rfiform"
									data-x="left" data-hoffset="75"
									data-y="250"
									data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
									data-speed="800"
									data-start="1400"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									>
										Request Information
								</a>

								<a class="tp-caption customin btn btn-lg btn-danger main-button" href="https://application.csuglobal.edu" target="_blank"
									data-x="left" data-hoffset="75"
									data-y="320"
									data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
									data-speed="800"
									data-start="1400"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									>
										Apply Online Now
								</a>

						</li>
					</ul>
				</div>
			</div>
			<!-- <div class="container">
				<section id="marketing">
					<div class="row">
						<div class="col-md-12">
							<nav>
								<ul class="actionLinks actionsCenter">
									<li><a href="#container-form">Request Information</a></li>
									<li>Apply Today</li>
								</ul>
							</nav>
						</div>
					</div>
				</section>
			</div> -->
			<!-- <div class="container">
			<div class="row">
				<div class="get-started">
								<a href="#" class="btn btn-lg btn-primary">Request Information!</a>
							<div class="learn-more">or <a href="index.html">Apply Today</a></div>
							</div>
			</div>
			</div> -->
			
			<div class="home-intro">
			<div class="container">

				<div class="row">
					<div class="col-md-4 ">
						<article>
							<h2 class="lead">Established in 1933 as a three-room junior college with 63 students, </h2>
							<p>Colorado State University Pueblo now has more than 5,000 students. We officially became a four-year university in 1965 and joined the CSU system in 2003.
							</p>
						</article>
					</div>
					<div class="col-md-4">
						<article>
							<h2 class="lead">Now in 2014, we're making another great change by offering degrees to students 100% online, from anywhere through the new 
							CSU Pueblo Online.  </h2>
							<p>It's a great option for you to complete your bachelor's degree fully online on a schedule that works for you.</p>
							<icon></icon>
						</article>
				 	 </div>
					 <div class="col-md-4">
							
							
							<img class="img-responsive"  src="img/home-photo3.jpg" alt="Laptop snapshot with guy studying" />
					
					  </div>
					</div>
				</div>
			 </div>

			
				<div class="container">

					<div class="row">
						<div class="col-md-12">
								<h4 class="small-margin">We Offer</h4>
							<div class="row">
								<div class="col-md-6">
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-star-o fa-3x"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Quality</h4>
											<p class="tall">A quality education taught  by world- class instructors</p>
										</div>
									</div>
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-clock-o fa-3x"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Flexibility</h4>
											<p class="tall">The flexibility of take courses as it fits into your schedule</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-money fa-3x"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Affordability</h4>
											<p class="tall">Affordability with our locked-in tuition rates</p>
										</div>
									</div>
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-users fa-3x"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Small Classes</h4>
											<p class="tall">Small class sizes giving you the opportunity to get to know your instructors</p>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				
			</div>	
		</div>
		<hr class="short" />
		<div class="container">
			

			<div class="row">
				<div id="container-programs" class="col-md-5">
					<section>
					<h4 class="small-margin">Programs</h4>
					<img class="img-responsive"  src="img/woman-construction.jpg" alt="Construction management program" />
				
					<nav>
					  <ul class="buttonLinks">
					  		<li><a href="construction.html">Construction Management</a></li>
					  </ul>
					 </nav>
					</section>
				</div>
				<div id="container-admissions" class="col-md-5 col-md-offset-1">
					<section>
					<h4 class="small-margin">Admissions</h4>
					
						<img class="img-responsive" src="img/home-photo2.jpg" alt="Admissions photo for section"  />
					
					<nav>
						<ul class="buttonLinks">
							<li><a href="enrollment.html">Enrollment Process</a></li>
							<li><a href="tuition.html">Tuition Rates</a></li>
							<li><a href="paymentOptions.html">Payment Options</a></li>
						</ul>
					</nav>
					</section>
				</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2">		
					<div id="rfiform" class="row featured-boxes login">
						<div class="col-md-12">
							<div class="featured-box featured-box-secundary default info-content">
								<div class="box-content">
									<h4>Request More Information</h4>
									<p>Fill out the form below and we'll contact you and answer all of your questions</p>
									<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

									<input type=hidden name="oid" value="00DA0000000Jdty">
									<input type=hidden name="00NF000000Clj2D"  value="CSUPuebloOnline">
									<input type=hidden name="retURL" value="http://csupuebloonline.co">
									 
									<!--  ----------------------------------------------------------------------  -->
									<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
									<!--  these lines if you wish to test in debug mode.                          -->
									<input type="hidden" name="debug" value=1>                              
									<input type="hidden" name="debugEmail" value="it@csuglobal.edu">
									<!--  ----------------------------------------------------------------------  -->
									 
									
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label for="first_name">First Name</label>
													<input id="first_name" name="first_name" type="text" value="" class="form-control input-lg">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label for="last_name">Last Name</label>
													<input id="last_name" name="last_name" type="text" value="" class="form-control input-lg">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label for="phone">Phone</label>
													<input id="phone" name="phone" type="text" value="" class="form-control input-lg">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="form-group">
												<div class="col-md-12">
													<label for="email">Email</label>
													<input id="email" name="email" type="text" value="" class="form-control input-lg">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 center">
												<input type="submit" value="Submit Information" class="btn btn-primary push-bottom" data-loading-text="Loading..." disabled>
											</div>
										</div>
									</form>
									<p>By submitting this form I agree that I can be contacted using the email or phone number that I provided.</p>

									<p>* required fields</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
</div>
</div>

<footer id="footer">
			<div class="container">
				<div class="row">
				<div class="col-md-4">

				<nav>
				 	<ul>
					 	<h4><a href="index.html">Home</a></h4>
						<h4>Programs</h4>
						<li><a href="construction.html">Construction Management</a></li>
						
						<h4>Admissions</h4>
						<li><a href="enrollment.html">Enrollment Process</a></li>
						<li><a href="tuition.html">Tuition</a></li>
						<li><a href="military.html">Military</a></li>
						<li><a href="paymentOptions.html">Payment Options</a></li>
					</ul>
				</nav>
						
				</div>
				<div class="col-md-4">
						
							<h4>Contact Us</h4>
							<ul class="contact">
								<li><p><i class="fa fa-phone"></i> 
								<strong>Phone:</strong> 844-258-0251</p></li>
								<li><p><i class="fa fa-envelope"></i>
								<strong>Email:</strong> <a href="mailto:admissions@csupuebloonline.co">admissions@csupuebloonline.co</a></p></li>
							</ul>
							

				<nav>
				 	
							<h4>Links</h4>
							<li><a href="http://www.csuglobal.edu" target="_blank">CSU Global</a></li>
							<li><a href="http://www.csupueblo.edu" target="_blank">CSU Pueblo</a></li>
							<li><a href="http://www.colostate.edu" target="_blank">CSU</a></li>
							<li><a href="http://www.colostate-pueblo.edu" target="_blank">Colorado State</a></li>
					
				</nav>
						
				</div>
				<div class="col-md-4">
							<h4>Online Assistance</h4>
							<p><a class="btn-lg btn-primary" href="https://application.csuglobal.edu" target="_blank">Apply Today</a></p>
							<p><a href="request-info.html">Request more info</a></p>
				</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
				<div class="row">
					<div class="col-md-8">
						<p>© Copyright 2014. CSU Pueblo Online. All Rights Reserved.</p>
					</div>
					<div class="col-md-4">
						<nav id="sub-menu">
							<ul>
								<li><a href="privacy.html">Privacy Policy</a></li>
								<li><a href="disclaimer.html">Disclaimer</a></li>
							</ul>
						</nav>
					</div>
				</div>
				</div>
			</div>
		</footer>
	

	<!-- Vendor -->
	<script src="js/vendor/jquery/jquery.js"></script>
	
	<script src="js/vendor/bootstrap/bootstrap.js"></script>
	<script src="js/vendor/common/common.js"></script>
	<script src="js/vendor/jquery.validation/jquery.validation.js"></script>
	<script src="js/vendor/jquery.stellar/jquery.stellar.js"></script>
	
	
	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>
	
	<!-- Specific Page Vendor and Views -->
	<script src="js/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="js/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	</script>
	
	<!-- Theme Custom -->
	<script src="js/custom.js"></script>
	
	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

	<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
	<script type="text/javascript">
	
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-12345678-1']);
		_gaq.push(['_trackPageview']);
	
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	
	</script>
	 -->

</body>
</html>
